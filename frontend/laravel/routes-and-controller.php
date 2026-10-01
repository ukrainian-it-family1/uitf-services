<?php

/*
|--------------------------------------------------------------------------
| 1. routes/web.php
|--------------------------------------------------------------------------
| Add inside the existing `{locale}` group, next to `services.product-development`.
| Use the same controller that renders Services/Outsource today.
*/

Route::get('/services/operations-platforms', [ServiceController::class, 'operationsPlatforms'])
    ->name('services.operations-platforms');

Route::get('/services/regulated-products', [ServiceController::class, 'regulatedProducts'])
    ->name('services.regulated-products');

Route::get('/services/rescue-and-restart', [ServiceController::class, 'rescueAndRestart'])
    ->name('services.rescue-and-restart');

Route::get('/services/get-estimate', [ServiceController::class, 'getEstimate'])
    ->name('services.get-estimate');


/*
|--------------------------------------------------------------------------
| 2. Controller actions
|--------------------------------------------------------------------------
| The props have the same shape as on /services/product-development:
|   outsourceSteps  → the 5 process steps (image, title, content[])
|   whyUs           → the 4 "Why us" items (id, name, description)
|   projects        → portfolio cards (same shape as Portfolio/Index)
| Build them the same way the product-development action does.
*/

use Inertia\Inertia;
use Inertia\Response;

class ServiceController
{
    public function operationsPlatforms(): Response
    {
        return Inertia::render('Services/OperationsPlatforms', [
            'outsourceSteps' => $this->outsourceSteps(), // same source as product-development
            'whyUs' => $this->whyUs(),                   // same source as product-development
            // Order matters: it is the order of the cards.
            'projects' => $this->projectsBySlug(['yachtomator', 'automarket', 'real-estate-crm', 'expertland']),
        ]);
    }

    public function regulatedProducts(): Response
    {
        return Inertia::render('Services/RegulatedProducts', [
            'outsourceSteps' => $this->outsourceSteps(),
            'whyUs' => $this->whyUs(),
        ]);
    }

    public function rescueAndRestart(): Response
    {
        return Inertia::render('Services/RescueAndRestart', [
            'whyUs' => $this->whyUs(),
        ]);
    }

    public function getEstimate(): Response
    {
        // No props: the page uses the existing ContactUsForm, which posts to /api/form.
        return Inertia::render('Services/GetEstimate');
    }
}
