<?php

namespace App\Controller;

use App\Service\ApiService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/dashboard')]
class DashboardController extends BaseController
{
    #[Route('/', name: 'app_dashboard')]
    public function index(): Response
    {
        $dashboardData = $this->apiService->getDashboardData();
        $ticketStats = $this->apiService->getTicketStats();
        $budgetStats = $this->apiService->getBudgetStats();
        $expenseStats = $this->apiService->getExpenseStats();

        return $this->render('dashboard/index.html.twig', [
            'stats' => [
                'tickets' => $dashboardData['ticketCount'] ?? 0,
                'leads' => $dashboardData['leadCount'] ?? 0,
                'clients' => $dashboardData['clientCount'] ?? 0
            ],
            'ticketPriorities' => $ticketStats['priorities'] ?? [],
            'budgetByClient' => $budgetStats['byClient'] ?? [],
            'expenseVsBudget' => $expenseStats['timeline'] ?? []
        ]);
    }

    #[Route('/tickets', name: 'app_dashboard_tickets')]
    public function tickets(): Response
    {
        $ticketsData = $this->apiService->getTickets();
        return $this->render('dashboard/tickets.html.twig', [
            'tickets' => $ticketsData
        ]);
    }

    #[Route('/leads', name: 'app_dashboard_leads')]
    public function leads(): Response
    {
        try {
            $leads = $this->apiService->getLeads();
            return $this->render('dashboard/leads.html.twig', [
                'leads' => $leads
            ]);
        } catch (\Exception $e) {
            return $this->handleApiException($e);
        }
    }

    #[Route('/expenses', name: 'app_expenses', methods: ['GET'])]
    public function expenses(Request $request): Response
    {
        $leadId = $request->query->get('leadId') ?? 0;
        $ticketId = $request->query->get('ticketId') ?? 0;
        $expenses = $this->apiService->getExpenses($leadId,$ticketId);
        return $this->render('dashboard/expenses.html.twig', [
            'expenses' => $expenses
        ]);
    }

    #[Route('/lead/{id}/edit', name: 'app_lead_edit', methods: ['POST'])]
    public function editLead(Request $request, int $id): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        try {
            $result = $this->apiService->updateLead($id, $data);
            return $this->json($result);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Failed to update lead'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/ticket/{id}', name: 'app_ticket_delete', methods: ['DELETE'])]
    public function deleteTicket(int $id): JsonResponse
    {
        try {
            $result = $this->apiService->deleteTicket($id);
            return $this->json($result);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Failed to delete ticket'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/lead/{id}', name: 'app_lead_delete', methods: ['DELETE'])]
    public function deleteLead(int $id): JsonResponse
    {
        try {
            $result = $this->apiService->deleteLead($id);
            return $this->json($result);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Failed to delete lead'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/expense/{id}', name: 'app_expense_update', methods: ['PUT'])]
    public function updateExpense(int $id, Request $request): JsonResponse
    {
        try {
            $data = json_decode($request->getContent(), true);
            $newAmount = $data['amount'] ?? null;
            $force = $data['force'] ?? 0;

            if ($newAmount === null) {
                return $this->json(['message' => 'Amount is required', 'status' => 'error'], Response::HTTP_BAD_REQUEST);
            }
            $result = $this->apiService->updateExpenseAmount($id, $newAmount, $force);
            return $this->json($result);
        } catch (\Exception $e) {
            // return $this->json(['message' => 'Failed to update expense', 'status' => 'error'], Response::HTTP_INTERNAL_SERVER_ERROR);
            return $this->json(['message' => $e->getMessage(), 'status' => 'error'], Response::HTTP_INTERNAL_SERVER_ERROR);

        }
    }
}
