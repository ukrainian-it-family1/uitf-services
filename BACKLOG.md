# Backlog — UITF Services Page

Сайт: https://ukrainian-it.family/en/services

## Done

- [x] 2026-10-01 — Skills установлены локально в `.claude/skills/`:
  - `brand-voice` (+ `references/voice-profile-schema.md`), `content-engine` — ECC, commit `c70874f`
  - `frontend-design` — скопирован из `~/.claude/skills/frontend-design` (origin: ECC). В текущем ECC skill переименован в `frontend-design-direction`, поэтому взята прежняя версия под запрошенным именем
  - `seo-page` — из клона `AgriciDaniel/claude-seo` (плагин `claude-seo` уже установлен глобально, `/claude-seo:seo-page` доступен)
  - `marketing` (+ `references/`), `positioning-audit` — из account-level sync `~/.claude/skills/synced/…`
- [x] 2026-10-01 — OpenSpec инициализирован (`@fission-ai/openspec`, профиль core): `openspec/` + команды `/opsx:propose|apply|archive|explore|sync|update` в `.claude/commands/opsx/`

- [x] 2026-10-01 — Изучены папка клиента (позиционирование, персоны, конкуренты, бренд-бриф, кейсы, блог) и живой сайт
- [x] 2026-10-01 — Создан `services/general.md`: 3 страницы услуг (Operations platforms, Regulated products, Rescue and restart) + страница формы, общие блоки, состояние сайта
- [x] 2026-10-01 — Полные EN-тексты: `services/01-operations-platforms.md`, `02-regulated-products.md`, `03-rescue-and-restart.md`, `04-get-estimate.md`
- [x] 2026-10-01 — Разобран стек сайта (Laravel + Inertia v2 SSR + Vue 3 + Tailwind 4.3.3) по Vite manifest и бандлам; составлен `frontend/DESIGN.md`
- [x] 2026-10-01 — Свёрстаны 4 Inertia-страницы на существующих компонентах сайта (`frontend/resources/js/pages/Services/`), 12 новых компонентов, переводы EN + UK (`frontend/lang/`), сниппет маршрутов и контроллера, README для интеграции
- [x] 2026-10-01 — Превью `preview/` (Vite + заглушки компонентов + живые данные): 4 страницы × EN/UK, 1440 и 375, без ошибок консоли и горизонтального скролла
- [x] 2026-10-01 — Превью доведено для показа клиенту: весь раздел Services по реальным путям (/en, /uk), стартовая страница-оглавление (UA), плашка «Попередній перегляд», картинки с живого сайта (работает после клона и как статика), README (UA) в корне и в `preview/`, `.gitignore`
- [x] 2026-10-01 — `frontend/laravel/data-changes.php`: ссылки карточек, колонка футера, sitemap (EN + UK)
- [x] 2026-10-02 — Репозиторий https://github.com/ukrainian-it-family1/uitf-services (public); превью публикуется на GitHub Pages через Actions при каждом пуше в main; `ІНСТРУКЦІЯ.md` (UA) для нетехнического читателя

## Next

- [ ] Показать клиенту превью (https://ukrainian-it-family1.github.io/uitf-services/) и собрать правки
- [ ] После погодження: передать `frontend/` разработчикам клиента, проверить интеграцию на стейджинге

## Notes

- Прогресс фиксируется в этом файле. Коммиты и пуш только по запросу.
- npm-пакет `openspec` — пустая заглушка 0.0.0; правильный: `npx @fission-ai/openspec@latest`.
