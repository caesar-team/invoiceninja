<?php
/**
 * Invoice Ninja (https://invoiceninja.com)
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2020. Invoice Ninja LLC (https://invoiceninja.com)
 *
 * @license https://opensource.org/licenses/AAL
 */

namespace App\Designs;

class Playful extends AbstractDesign
{

	public function __construct() {
	}


    public function includes()
    {
        return '
        <!DOCTYPE html>
            <html lang="en">
                <head>
                    <title>$number</title>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <meta http-equiv="x-ua-compatible" content="ie=edge">
                    <link rel="stylesheet" href="/css/design/playful.css"> 
                </head>
                <body>
                <style>
                @page  
                { 
                    size: auto;
                    margin-top: 5mm;
                } 


            .table_header_thead_class text-left bg-teal-600 rounded-lg
            .table_header_td_class font-semibold text-white px-4 py-3
            .table_body_td_class border-b-4 border-teal-600 text-red-800 px-4 py-4
                </style>
        ';
    }
    

	public function header() {

		return '
                <div class="my-12 mx-16">
                    <div class="flex items-center justify-between">
                        <div class="w-1/2">
                            $company_logo
                        </div>
                        <div class="bg-teal-600 p-5">
                            <div class="flex">
                                <div class="flex justify-between text-white flex-col mr-8">
                                    $entity_labels
                                </div>
                                <div class="flex flex-col text-right text-white">
                                    $entity_details
                                </div>
                            </div>
                        </div>
                    </div>';

	}

	public function body() {

        return '
        <div class="flex mt-16">
        <div class="w-1/2">
            <div class="flex flex-col">
                <p class="font-semibold text-teal-600 pl-4">$entity_label</p>
                <div class="flex border-dashed border-t-4 border-b-4 border-teal-600 py-4 mt-4 pl-4">
                    <section class="flex flex-col">
                        $client_details
                    </section>
                </div>
            </div>
        </div>
        <div class="w-1/2 ml-24">
            <div class="flex flex-col">
                <p class="font-semibold text-teal-600 pl-4">$from_label:</p>
                <div class="flex border-dashed border-t-4 border-b-4 border-teal-600 py-4 mt-4 pl-4">
                    <section class="flex flex-col">
                        $company_details
                    </section>
                </div>
            </div>
        </div>
    </div>';

	}

    public function task() {
    }

    public function product() {
        return '
            <table class="w-full table-auto mt-20 mb-8">
                <thead class="text-left bg-teal-600 rounded-lg">
                    <tr>
                        $product_table_header
                    </tr>
                </thead>
                <tbody>
                    $product_table_body
                </tbody>
            </table>

            <div class="flex items-center justify-between mt-2 px-4 pb-4">
                <div class="w-1/2">
                    <div class="flex flex-col">
                        <p>$entity.public_notes</p>
                    </div>
                </div>
                <div class="w-1/3 flex flex-col">
                    <div class="flex px-3 mt-2">
                        <section class="w-1/2 text-right flex flex-col">
                            $total_tax_labels
                            $line_tax_labels
                        </section>
                        <section class="w-1/2 text-right flex flex-col">
                            $total_tax_values
                            $line_tax_values
                        </section>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between mt-4 pb-4 px-4">
                <div class="w-1/2">
                    <div class="flex flex-col">
                        <p class="font-semibold">$terms_label</p>
                        <p>$terms</p>
                    </div>
                </div>
                <div class="flex w-2/5 flex-col">
                    <section class="flex bg-teal-600 py-3 px-4 text-white">
                        <p class="w-1/2">$balance_due_label</p>
                        <p class="text-right w-1/2">$balance_due</p>
                    </section>
                </div>
            </div>
        </div>';
	}

	public function footer() {

        return '
                </div>
            </body>
        </html>';

	}

}