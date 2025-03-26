<?php

namespace App\Service;

use App\Security\User;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

class ApiService
{
    private $client;
    private $baseUrl;
    private $security;
    private $requestStack;

    public function __construct(
        HttpClientInterface $client,
        string $apiBaseUrl = 'http://localhost:8080/api',
        Security $security,
        RequestStack $requestStack
    ) {
        $this->client = $client;
        $this->baseUrl = $apiBaseUrl;
        $this->security = $security;
        $this->requestStack = $requestStack;
    }

    private function getHeaders(): array
    {
        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];

        $user = $this->security->getUser();
        if ($user instanceof User) {
            $headers['Authorization'] = 'Bearer ' . $user->getApiToken();
        } else {
            $session = $this->requestStack->getSession();
            if ($session && $session->has('api_token')) {
                $headers['Authorization'] = 'Bearer ' . $session->get('api_token');
            }
        }

        return $headers;
    }

    public function login(string $username, string $password): array
    {
        try {
            $response = $this->client->request('POST', $this->baseUrl . '/auth/login', [
                'json' => [
                    'username' => $username,
                    'password' => $password
                ]
            ]);

            $data = $response->toArray();
            
            if (isset($data['token'])) {
                return [
                    'token' => $data['token'],
                    'username' => $username
                ];
            }

            throw new AuthenticationException($data['message'] ?? 'Erreur d\'authentification');
        } catch (\Exception $e) {
            throw new AuthenticationException('Erreur lors de la connexion: ' . $e->getMessage());
        }
    }

    public function authenticateWithGoogle(array $googleData): array
    {
        try {
            $response = $this->client->request('POST', $this->baseUrl . '/auth/google', [
                'json' => [
                    'email' => $googleData['email'],
                    'name' => $googleData['name'],
                    'google_id' => $googleData['google_id'],
                    'access_token' => $googleData['access_token']
                ],
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ]
            ]);

            $data = $response->toArray();
            print_r($data);
            
            if (!isset($data['token'])) {
                throw new AuthenticationException('Token non reçu du serveur API');
            }

            return [
                'token' => $data['token'],
                'username' => $googleData['email']
            ];
        } catch (\Exception $e) {
            throw new AuthenticationException('Erreur lors de l\'authentification Google: ' . $e->getMessage());
        }
    }

    public function getDashboardData(): array
    {
        $response = $this->client->request('GET', $this->baseUrl . '/dashboard/stats', [
            'headers' => $this->getHeaders()
        ]);

        return $response->toArray();
    }

    public function getTickets(): array
    {
        $response = $this->client->request('GET', $this->baseUrl . '/dashboard/tickets', [
            'headers' => $this->getHeaders()
        ]);

        return $response->toArray();
    }

    public function getLeads(): array
    {
        $response = $this->client->request('GET', $this->baseUrl . '/dashboard/leads', [
            'headers' => $this->getHeaders()
        ]);

        return $response->toArray();
    }

    public function getTicketStats(): array
    {
        $response = $this->client->request('GET', $this->baseUrl . '/dashboard/tickets/stats', [
            'headers' => $this->getHeaders()
        ]);

        return $response->toArray();
    }

    public function getBudgetStats(): array
    {
        $response = $this->client->request('GET', $this->baseUrl . '/dashboard/budgets/stats', [
            'headers' => $this->getHeaders()
        ]);

        return $response->toArray();
    }

    public function getExpenseStats(): array
    {
        $response = $this->client->request('GET', $this->baseUrl . '/dashboard/expenses/stats', [
            'headers' => $this->getHeaders()
        ]);

        return $response->toArray();
    }

    public function getExpenses(int $leadId, int $ticketId): array
    {
        $path = '/dashboard/expenses?action=get';
        if ($leadId) {
            $path .= '&leadId=' . $leadId;
        }
        if ($ticketId) {
            $path .= '&ticketId=' . $ticketId;
        }
        $response = $this->client->request('GET', $this->baseUrl . $path, [
            'headers' => $this->getHeaders()
        ]);

        return $response->toArray();
    }

    public function updateTicket(int $id, array $data): array
    {
        $response = $this->client->request('PUT', $this->baseUrl . '/dashboard/tickets/' . $id, [
            'headers' => $this->getHeaders(),
            'json' => $data
        ]);

        return $response->toArray();
    }

    public function updateLead(int $id, array $data): array
    {
        $response = $this->client->request('PUT', $this->baseUrl . '/dashboard/leads/' . $id, [
            'headers' => $this->getHeaders(),
            'json' => $data
        ]);

        return $response->toArray();
    }

    public function deleteTicket(int $id): array
    {
        $response = $this->client->request('DELETE', $this->baseUrl . '/dashboard/tickets/' . $id, [
            'headers' => $this->getHeaders()
        ]);

        return $response->toArray();
    }

    public function deleteLead(int $id): array
    {
        $response = $this->client->request('DELETE', $this->baseUrl . '/dashboard/leads/' . $id, [
            'headers' => $this->getHeaders()
        ]);

        return $response->toArray();
    }

    public function updateExpenseAmount(int $id, float $newAmount, int $force = 0): array
    {
        $response = $this->client->request(
            'PUT',
            "{$this->baseUrl}/dashboard/expense/{$id}",
            [
                'headers' => $this->getHeaders(),
                'json' => [
                    'amount' => $newAmount,
                    'force' => $force
                ]
            ]
        );
        return $response->toArray();
    }

    public function getSettings(): array
    {
        $response = $this->client->request('GET', $this->baseUrl . '/settings', [
            'headers' => $this->getHeaders()
        ]);

        return $response->toArray();
    }

    public function updateBudgetAlert(array $data): array
    {
        $response = $this->client->request('PUT', $this->baseUrl . '/settings/budget-alert', [
            'headers' => $this->getHeaders(),
            'json' => $data
        ]);

        return $response->toArray();
    }
}
