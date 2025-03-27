<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ExpenseController extends BaseController
{
    #[Route('/expense/import', name: 'expense_import', methods: ['GET', 'POST'])]
    public function import(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $file = $request->files->get('csv_file');
            
            if ($file && $file->getClientOriginalExtension() === 'csv') {
                $data = [];
                if (($handle = fopen($file->getPathname(), 'r')) !== false) {
                    // Skip header row
                    $headers = fgetcsv($handle);
                    
                    while (($row = fgetcsv($handle)) !== false) {
                        $data[] = array_combine($headers, $row);
                    }
                    fclose($handle);
                }

                // Convert to JSON-compatible array
                $jsonData = array_map(function($item) {
                    return [
                        'customer_email' => $item['customer_email'],
                        'customer_name' => $item['customer_name'],
                        'subject_or_name' => $item['subject_or_name'],
                        'type' => $item['type'],
                        'status' => $item['status'],
                        'createdAt' => $item['createdAt'],
                        'employee' => (int)$item['employee'],
                        'expense' => (float)$item['expense']
                    ];
                }, $data);

                $result = $this->apiService->importCsv($jsonData);
                return $this->render('expense/import.html.twig', [
                    'imported_data' => $jsonData,
                    'result' => $result
                ]);
            }

            $this->addFlash('error', 'Please upload a valid CSV file');
        }

        return $this->render('expense/import.html.twig');
    }
}