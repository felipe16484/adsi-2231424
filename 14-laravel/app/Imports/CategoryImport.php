<?php

namespace App\Imports;

use App\Models\Category;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;

class CategoryImport implements ToModel {

    public function model(array $row) {
        return new Category([
            'name' => $row[0],
            'description' => $row[1]
        ]);
    }

}
