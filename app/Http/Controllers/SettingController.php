<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\UpdateEmailRequest;
use App\Models\NeedCategory;
use App\Http\Requests\Setting\CreateCategoryRequest;

class SettingController extends Controller
{
    public function index () {
        $userProfile = Auth::user();

        return view('settings.index', [
            'user_profile' => $userProfile
        ]);
    }

    public function category() {
        $categories = NeedCategory::get();

        return view('settings.category', [
            'categories' => $categories
        ]);
    }

    public function createCategory(CreateCategoryRequest $request) {
        try {
            NeedCategory::create([
                'category_description' => $request->category_description
            ]);

            return redirect()->to('/settings/category')->with(['success' => 'new category added!']);
        } catch (\Throwable $th) {
            return redirect()->to('/settings/category')->with(['failed' => $th->getMessage()]);
        }
    }

    public function deleteCategory($id) {
        try {
            NeedCategory::where([
                'id' => $id
            ])->delete();

            return redirect()->to('/settings/category')->with(['success' => 'category removed!']);
        } catch (\Throwable $th) {
            return redirect()->to('/settings/category')->with(['failed' => $th->getMessage()]);
        }
    }
}
