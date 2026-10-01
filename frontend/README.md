# UITF service pages: frontend handoff

Four new pages for ukrainian-it.family, built for the site's existing stack and components.

| Page | URL | Inertia component |
|---|---|---|
| Operations platforms | `/{locale}/services/operations-platforms` | `Services/OperationsPlatforms` |
| Regulated products | `/{locale}/services/regulated-products` | `Services/RegulatedProducts` |
| Rescue and restart | `/{locale}/services/rescue-and-restart` | `Services/RescueAndRestart` |
| Get an estimate (contact form) | `/{locale}/services/get-estimate` | `Services/GetEstimate` |

**Stack:** Laravel, Inertia v2 (SSR), Vue 3 `<script setup lang="ts">` and Tailwind CSS v4. The pages follow the conventions of the current site: arbitrary-value Tailwind classes, Montserrat, and texts in the translation files.

## What's in the folder

```text
frontend/
├── resources/js/pages/Services/
│   ├── OperationsPlatforms.vue
│   ├── RegulatedProducts.vue
│   ├── RescueAndRestart.vue
│   └── GetEstimate.vue
├── resources/js/components/services/
│   ├── existing.ts        ← the only place that imports existing components (fix paths here)
│   ├── useContent.ts      ← reads arrays (cards, FAQ, facts) from translations
│   ├── faqJsonLd.ts       ← FAQPage structured data for SeoHead
│   ├── HeroActions.vue    ← CTA button + caption under the H1
│   ├── PainGrid.vue       ← numbered problem cards (+ optional closing line)
│   ├── FeatureGrid.vue    ← 2/3/4-column cards in the WhyUs style
│   ├── CaseHighlight.vue  ← case text + 3 facts + link (styles of the portfolio "What changed" block)
│   ├── DomainList.vue     ← domain / description / case rows
│   ├── FitBlock.vue       ← "Yes, if" / "Not a fit, if"
│   ├── NumberedSteps.vue  ← audit steps and "what happens next"
│   ├── StoryQuote.vue     ← yellow-border quote (portfolio closing quote style)
│   ├── FaqList.vue        ← accordion on native <details>, keyboard accessible
│   └── EstimateCta.vue    ← closing section with a button to the estimate page
├── lang/en/services-pages.php
├── lang/uk/services-pages.php
├── laravel/routes-and-controller.php
├── laravel/data-changes.php   ← card links, footer column, sitemap paths (EN + UK)
└── DESIGN.md              ← the site's design system, reconstructed from production
```

## Integration steps

1. **Copy** `resources/js/pages/Services/*.vue` and `resources/js/components/services/` into the project.
2. **Check `existing.ts`.** It re-exports the components the pages reuse: `AppLayout`, `SeoHead`, `WidthBox`, `Breadcrumbs`, `TitleSectionWrapper`, `SectionWrapper`, `MainButton`, `ContactUsForm`, `WhyUs`, `PortfolioList`, `ServiceProcess`, and the translation composable that returns `{ t, locale, localePath }`. The names and props match the production build. The file paths and the composable name are a best guess. Adjust them here, once.
3. **Translations.** Merge the four top-level entries of `lang/en/services-pages.php` (`ServicesOperations`, `ServicesRegulated`, `ServicesRescue`, `ServicesEstimate`) into the `Views` group for `en`. Merge `lang/uk/services-pages.php` into the same group for `uk`. The pages also reuse existing keys: `Views.ServicesOutsource.WhyUsName/WhyUsTitles/ServiceProcessName/ServiceProcessTitles`, `Components.ContactUsForm.*` and `Components.PortfolioList.MainButton`.
4. **Routes and controller.** See `laravel/routes-and-controller.php`. The props have the same shape as `services.product-development` (`outsourceSteps`, `whyUs`, `projects`).
5. **Links to the new pages.** Exact values for EN and UK are in `laravel/data-changes.php`:
   - The `services` prop on Home and `/services`: point the three cards to the new pages. Today all three point to `/services/product-development`.
   - `navigation.footerLinks` → "Services": the three new pages plus Product development.
   - Sitemap: the four new paths for both locales.
6. **Build:** `npm run build`, plus the SSR build if it runs separately.

## Behaviour notes

- **Section titles.** `SectionWrapper` appends the yellow `.` (or `?` with `question`), so `*Titles` values have no trailing punctuation. H1 values (`PageTitle`) keep their own period, as on the existing pages.
- **Lists in translations.** `t()` returns strings only, so arrays such as `ProblemItems`, `FaqItems` and `CaseFacts` are read with `useContent('Views.X.Key', [])` from `usePage().props.translations`.
- **The form.** `GetEstimate` reuses `ContactUsForm` unchanged: same `/api/form` endpoint, same validation, same success state. Service CTAs link with `?service=operations|regulated|audit`. The value becomes the analytics form name (`services_estimate_operations`, and so on). The submission already carries `page` (the path).
- **SEO.** Each page passes `title` and `description` to `SeoHead`. The three service pages also pass FAQPage JSON-LD through `jsonLd`. Breadcrumb JSON-LD comes from `Breadcrumbs`, as on the rest of the site.
- **Accessibility.**
  - One H1 per page and H2 per section (through `SectionWrapper`). Card titles are H3.
  - Facts use `<dl>` and steps use `<ol>`.
  - The FAQ is native `<details>/<summary>` and works from the keyboard.
  - Decorative numbers and icons are `aria-hidden`.
- **Responsive.** Grids collapse at the site's breakpoints (`max-[1024px]`, `max-sm`). I checked at 1440 and 375 with no horizontal overflow.

## Preview

`../preview/` renders the whole Services section outside Laravel, so you can review it before integration. It covers `/services`, `/services/product-development` and the four new pages, in both locales, at their real paths. It uses stand-ins for the site's own components, rebuilt from the production markup, with live data from ukrainian-it.family. The hub cards already use the new links from `data-changes.php`. Links outside the section open on the live site.

```bash
cd preview
npm install
npm run data   # rebuilds src/data/*.json from the live site + lang files
npm run dev    # http://localhost:5180/en/services  (or /uk/services)
```

The preview is for review only. Don't copy anything from `preview/src/stubs` into the project: the real components already exist there.
