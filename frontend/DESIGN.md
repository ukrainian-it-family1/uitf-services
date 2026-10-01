# ukrainian-it.family: website design system

Rebuilt from the production build on 1 October 2026, using `build/manifest.json`, the compiled Vue chunks, `app.css` and the live pages. Every value below is used on the site today. The client's document design system (Inter, JetBrains Mono) covers proposals and estimates, not the website.

## Stack

| Layer | Detail |
|---|---|
| Backend | Laravel. Filament admin, Horizon queues, Ziggy routes |
| Frontend | Inertia v2 with SSR, Vue 3 SFC (`<script setup>`, TypeScript), Vite |
| Styling | Tailwind CSS 4.3.3. Arbitrary values in templates (`text-[#01669c]`) and scoped CSS for a few components. No theme tokens beyond `--font-sans` |
| Libraries | Swiper (sliders), vee-validate + yup (forms), VueUse-style breakpoints |
| i18n | `en`, `uk`. Laravel translation groups `Views.*` and `Components.*` are shared with the page as `props.translations` and read through `t('Views.Page.Key')` |
| Pages | `resources/js/pages/<Name>.vue`, rendered by name (`Services/Outsource`) |

## Color

| Role | Hex | Where |
|---|---|---|
| Primary blue | `#01669c` | Headings H2, body text on light, primary button, links |
| Deep blue | `#01486e` | H1, long-form paragraphs |
| Mid blue | `#3485b0` | Button hover, placeholders, card descriptions |
| Muted blue | `#80b3ce` | Section labels, current breadcrumb, secondary captions |
| Line blue | `#b2d1e1` | Input borders, dividers |
| Pale blue | `#dbeaf1` | Tags, secondary button hover |
| Surface blue | `#f2f7fa` | `WidthBox filled="light"`, card background |
| Accent yellow | `#ffc20f` | Title period, label dot, bullets, facts, CTA links |
| Yellow hover | `#b3880b` | Hover state for yellow links |
| Surface cream | `#fffcf3` | Alternating cards, facts |
| Dark | `#011520` | `WidthBox filled="dark"` (screens section) |
| Error | `#df3737` | Required marker, form errors |

The process palette runs light to dark to accent: `#dbeaf1 → #b2d1e1 → #80b3ce → #01669c → #ffc20f`.

## Typography

Montserrat 400/500/600/700, self-hosted from `/static/fonts`. Gilroy is loaded but not used in the pages reviewed.

| Style | Spec |
|---|---|
| H1 (`TitleSectionWrapper`) | 700, 40/49, uppercase, `#01486e`, centred. Mobile 32/39 |
| H2 (`SectionWrapper`) | 700, 40/49, uppercase, `#01669c`, ends with a yellow `.` or `?`. Mobile 32/39 |
| Card title | 600, 24/29, `#01669c` |
| Lead | 500, 20, 150%, tracking .04em (portfolio subtitle) |
| Body | 400, 16, 150%, tracking .04em, `#01486e` |
| Small body | 400, 14, 170%, tracking .04em |
| Section label | 600, 12/15, uppercase, tracking .04em, `#80b3ce`, with a 6px yellow dot in front |
| Nav, breadcrumb, tag | 600, 14/17, uppercase, tracking .08em |
| Button | 600, 16/20, uppercase, tracking .04em |
| Fact value | 700, 28, 130%, uppercase, `#ffc20f` |
| Quote | 600, 24, 150%, `#01669c`, 4px yellow left border |

## Layout

- **`WidthBox`.** Full-width band with an optional background (`light` / `dark`). Content is capped at 1440px, or 1002px with `small`.
- **`SectionWrapper` padding.** `px-16 pt-16 pb-[120px]`, or `py-[120px]` with `big`. Mobile `px-3 pt-12`. Label `mb-6`, title `mb-16`.
- **`TitleSectionWrapper`.** Centred page title block. `small` trims the bottom padding.
- **Breakpoints.** `max-[1024px]` (tablet, grids go to one column), `max-[768px]`, `max-sm` / 480px (mobile paddings, smaller titles). The header is 94px tall (80px under 1200px) and sticky.
- **Rhythm.** Sections alternate white and `#f2f7fa`. Cards in a row alternate `#f2f7fa` and `#fffcf3`. The gap between cards is 12px (`gap-3`).

## Components (existing)

| Component | Props | Notes |
|---|---|---|
| `AppLayout` | | Header, main, footer, cookie consent |
| `SeoHead` | `title, description, image, type, keywords, jsonLd` | Canonical, hreflang, OG and Twitter come from `props.seoContext` |
| `WidthBox` | `filled?: 'light'\|'dark', small` | |
| `Breadcrumbs` | `items[{text, href?}], centered` | Emits BreadcrumbList JSON-LD |
| `TitleSectionWrapper` | `title, description, small` | H1 + slot |
| `SectionWrapper` | `label, title, secondTitle, description, link, big, question, titleColor` | H2 + slot |
| `MainButton` | `type ('button'\|'submit'\|'link'), variant ('primary'\|'secondary'\|'outlined'), href, size ('small' 48px \| 'big' 72px), width, blank` | Square corners, arrow icon after the label |
| `ContactUsForm` | `formLabel, formDescription, fileLabel, descriptionField, linkField, bookCall, analyticsFormName` | Posts multipart to `/api/form` (name, email, description, link, file, page, consent). Book a call goes to `meet.ukrainian-it-family.com` |
| `ContactBlock` / `DropALine` | `analyticsFormName, filled` | Inline form section / modal trigger |
| `ServiceList` | `items[{name, description, link}]` | 2-column service cards, hover reveals "Learn more" |
| `ServiceProcess` | `steps[{image, title, content[]}]` | 5 coloured chevrons on desktop, Swiper on tablet and below |
| `WhyUs` | `items[{id, name, description}]` | 4 columns, alternating backgrounds |
| `ExpertiseList` | `items[{id, name, image, description}]` | Logo tiles |
| `PortfolioList` / `PortfolioCard` | `projects, moreButton` | Masonry with 2 columns, alternating card height and colour |

## Visual rules

- No rounded corners on cards, inputs or buttons. Only the label dot and pagination bullets are round.
- No shadows on content. The header dropdown has a soft blue shadow (`0 12px 24px rgba(1,72,110,.2)`).
- Every section title ends with a yellow `.` or `?`. That's the brand signature, so keep it.
- Interactions use `transition-all duration-500`: colour shifts on links and buttons, and opacity reveals on cards.
- Icons are SVG arrows (`arrow-white`, `arrow-blue`, `arrow-yellow`, `arrow-down-blue`) from `/static/images`.
