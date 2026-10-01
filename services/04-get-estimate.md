# Page 4. Contact form

**URL:** `/en/services/get-estimate`
**Breadcrumb:** Homepage → Services → Get an estimate
**Title:** Get a scope and budget in 48 hours | Ukrainian IT Family
**Meta description:** Tell us what happens in your business today. Within 48 hours you get scope, phases and price. Free, no commitment.
**Indexing:** `noindex, follow` (the page duplicates `/en/contacts` in intent)

The final page. The site header and footer stay. No side navigation, no case cards, no "read also". The only links on the page are the Privacy policy and Book a call.

---

## Hero

**H1:** Tell us what happens today.
**Subline:** Within 48 hours you get scope, phases and a budget. Free, and yours to keep even if you work with someone else.

---

## Form

| Field | Type | Required | Label | Placeholder |
|---|---|---|---|---|
| name | text | yes | Your name | Enter your name |
| email | email | yes | Your email | name@company.com |
| service | select | no | What are you working on? | Choose one |
| description | textarea | yes | What are you looking to build or fix? | What happens in your business today, and what goes wrong |
| brief | file (.doc .docx .pdf .txt) | no | Upload a brief (optional) | |
| consent | checkbox | yes | I agree to the processing of my data as described in the Privacy policy | |

**Options for `service`:**
- Operations platform
- Regulated product
- Audit of existing code
- Not sure yet

The value is preselected from the URL parameter: `?service=operations`, `?service=regulated`, `?service=audit`. With no parameter: "Choose one".

**Button:** Send
**Under the button:** No 12 page brief needed. A few sentences about your process is enough.
**Secondary link:** Prefer to talk first? Book a call → `https://meet.ukrainian-it-family.com/uitf/intro?layout=month_view`

---

## Error states

| Situation | Message |
|---|---|
| Name empty | Tell us what to call you |
| Email empty or invalid | We need an email to send the estimate to |
| Description empty | A few sentences is enough. What happens today? |
| Consent unchecked | Please agree to the Privacy policy so we can reply |
| File too large or wrong type | Upload a .doc, .docx, .pdf or .txt file |
| Send failed | Something went wrong on our side. Try again, or write to contact@ukrainian-it.family |

---

## After sending

Shown in place of the form on the same page. No redirect.

**H2:** Got it. Here's what happens next.

| Step | Text |
|---|---|
| **1. A reply** | From the people who will do the work, not a sales team |
| **2. A 30 minute call** | About your process, not about technology |
| **3. Scope and budget** | Within 48 hours of the call: what to build, in what phases, how long and how much. In writing |

**Line under the steps:** Nothing to prepare. If you have documents or screenshots of how the process works today, bring them to the call.
