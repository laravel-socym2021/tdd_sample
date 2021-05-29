<?php

namespace App\Http\Controllers;

use App\Services\CustomerService; // 忘れずにuse
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getCustomers(CustomerService $customerService): \Illuminate\Http\JsonResponse
    {
        // 存在しないメソッドを先に記述
        return response()->json($customerService->getCustomers());
    }

    public function postCustomers(Request $request, CustomerService $customerService)
    {
        $this->validate($request, ['name' => 'required']);
        $customerService->addCustomer($request->json('name'));
    }

    public function getCustomer()
    {
    }

    public function putCustomer()
    {
    }

    public function deleteCustomer()
    {
    }

    public function getReports()
    {
    }

    public function postReport()
    {
    }

    public function getReport()
    {
    }

    public function putReport()
    {
    }

    public function deleteReport()
    {
    }
}
