<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\BerproductMonthly;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class BerproductMonthlyExport implements FromCollection, WithHeadings, WithStartRow, WithMapping, WithStrictNullComparison
{
    public function startRow(): int
    {
        return 2;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        $products = BerproductMonthly::select('product_phone', 'product_sumber', 'product_price', 
                                    'product_category', 'product_pin', 'product_sold', 'product_new',
                                    'product_comment', 'product_package', 'product_grade', 'product_discount',
                                    'monthly_status')
                            ->orderByRaw("CASE WHEN product_sold = 'no' THEN 1 ELSE 2 END")
                            ->orderBy('product_sold')
                            ->get();

        return $products;
    }

    public function headings(): array
    {
        return [
            'number',
            'sum',
            'price',
            'catagory',
            'VIP',
            'sold',
            'new',
            'comment',
            'package',
            'grade',
            'discount',
            'monthly'
        ];
    }

    public function map($product): array
    {
        return [
            $product->product_phone,
            $product->product_sumber,
            $product->product_price,
            $product->default_cate,
            $product->product_pin,
            $product->product_sold,
            $product->product_new,
            $product->product_comment,
            $product->product_package,
            $product->product_grade,
            $product->product_discount,
            $product->monthly_status,
        ];
    }
}
