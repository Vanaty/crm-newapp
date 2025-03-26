<?php

namespace App\Controller;

use App\Service\ApiService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SettingsController extends BaseController
{
    #[Route('/settings/budget-alert', name: 'app_settings_budget_alert')]
    public function budgetAlert(Request $request, ApiService $apiService): Response
    {
        if ($request->isMethod('POST')) {
            $alertValue = $request->request->get('alert_value');
            try {
                $response = $apiService->updateBudgetAlert(['alert_value' => floatval($alertValue)]);
                return $this->redirectToRoute('app_settings_budget_alert', [
                    'success' => 'Alerte de budget mise à jour avec succès'
                ]);
            } catch (\Exception $e) {
                return $this->redirectToRoute('app_settings_budget_alert', [
                    'error' => $e->getMessage()
                ]);
            }
        }

        try {
            $settings = $apiService->getSettings();
            return $this->render('settings/budget_alert.html.twig', [
                'alert_value' => $settings['budget_alert'] ?? 0,
                'error' => $request->query->get('error'),
                'success' => $request->query->get('success')
            ]);
        } catch (\Exception $e) {
            return $this->render('settings/budget_alert.html.twig', [
                'alert_value' => 0,
                'error' => $e->getMessage(),
                'success' => FALSE
            ]);
        }
    }
}
