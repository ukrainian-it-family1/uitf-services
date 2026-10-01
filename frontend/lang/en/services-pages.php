<?php

// Keys for the four new service pages.
// Merge these four entries into the existing "Views" translation group,
// next to "Services" and "ServicesOutsource".
// Section titles have no trailing punctuation: SectionWrapper adds the yellow "." or "?".

return [

    'ServicesOperations' => [
        'HeadTitle' => 'Operations platforms for service businesses | Ukrainian IT Family',
        'MetaDescription' => 'Invoicing, partner payouts, reconciliation and scheduling in one system where the numbers agree. Built for owners with no technical team. Scope in 48 hours.',
        'Breadcrumbs' => ['Homepage', 'Services', 'Operations platforms'],
        'PageTitle' => 'One system where the numbers agree with each other.',
        'PageDescription' => 'Money in the bank, invoiced and earned. Three numbers that should match and don’t. We build the operations platform that makes them match, for owners who run the business without a technical team.',
        'ButtonText' => 'Get a scope and budget',
        'ButtonCaption' => 'In 48 hours. Free, no commitment.',

        'ProblemName' => 'The problem',
        'ProblemTitles' => 'Sound familiar',
        'ProblemItems' => [
            ['title' => 'The process lives in 4 places', 'text' => 'The schedule in one tool, invoices in another, partner payouts in a spreadsheet, the rest in someone’s inbox.'],
            ['title' => 'A complaint means a recalculation', 'text' => 'A discount for the client, a new share for the partner, a new margin for you. All by hand.'],
            ['title' => 'Month end takes a week', 'text' => 'And at the end of it nobody can explain why the figures differ.'],
            ['title' => 'One person holds it together', 'text' => 'The whole process sits in their head. If they leave, so does the process.'],
        ],
        'ProblemClosing' => 'None of this is a software problem yet. It becomes one the day you open the next city.',

        'BuildName' => 'What we build',
        'BuildTitles' => 'The system behind the work',
        'BuildDescription' => 'Not a website in front of it. Every operations platform we build starts from how money and work move through your business today. Then we put it in one place.',
        'BuildItems' => [
            ['title' => 'Schedule and pricing rules', 'text' => 'The schedule becomes the source of truth. Invoices, partner obligations and revenue come out of it, so they can’t disagree.'],
            ['title' => 'Invoicing and reconciliation', 'text' => 'Bank transactions matched to invoices, including the payments that match nothing.'],
            ['title' => 'Partner payouts', 'text' => 'Approval, corrections and recalculations in the system, not in a spreadsheet next to it.'],
            ['title' => 'One platform, every role', 'text' => 'Admins, operators, partners, clients and back office. Each sees their part, nobody works in a separate tool.'],
            ['title' => 'Reporting', 'text' => 'By city, country and period. The figure in the report is the figure in the system.'],
            ['title' => 'Room to grow sideways', 'text' => 'A new city or country reuses the same core. You add data, not a new back office.'],
        ],

        'CaseName' => 'Case study',
        'CaseTitles' => 'Andulka: new cities, no new back office',
        'CaseTags' => ['Property services', 'Operations', 'Active since 2023'],
        'CaseParagraphs' => [
            'A property service business that grows across cities and countries through partners. Before the platform, invoicing, partner payouts and complaints lived in spreadsheets and bank statements, reconciled by hand. Every mistake cost money directly: a wrong payout, an unaccounted complaint, a wrong discount.',
            'We built one system on a strict hierarchy: country, city, building, entrance. The schedule drives the charges. From it the system derives the client invoice, the partner payout and the service revenue. Complaints adjust discounts, partner income and margin automatically. DAC7 exports come from the same data.',
        ],
        'CaseFacts' => [
            ['title' => '3+ years', 'description' => 'active engagement, still running'],
            ['title' => '4 levels', 'description' => 'country, city, building, entrance'],
            ['title' => '1 source', 'description' => 'the schedule drives invoice, payout and revenue'],
        ],
        'CaseLinkText' => 'Read the full case',

        'CasesName' => 'Case studies',
        'CasesTitles' => 'The same problem in other industries',

        'FitName' => 'Fit',
        'FitTitles' => 'Is this for you',
        'FitYesTitle' => 'Yes, if',
        'FitYesItems' => [
            'You run a team of 11 to 50 people.',
            'Money moves through partners, payouts or several roles.',
            'The process outgrew spreadsheets, and hiring a developer hasn’t worked or isn’t realistic.',
        ],
        'FitNoTitle' => 'Probably not, if',
        'FitNoItems' => [
            'A ready SaaS fits your process as it is. Use it. We’ll tell you so on the call.',
        ],

        'FaqName' => 'FAQ',
        'FaqTitles' => 'Questions owners ask us',
        'FaqItems' => [
            ['question' => 'We tried this before. Nobody used the system.', 'answer' => 'That usually happens when a system is built around how it looks, not how people work. We design for daily use: dense screens, filters that follow your process, the fewest clicks on the work your team repeats every day.'],
            ['question' => 'Our process isn’t standard.', 'answer' => 'That’s the reason to build. If it were standard, a template would do, and we’d tell you to use one.'],
            ['question' => 'What will it cost?', 'answer' => 'That’s what the 48 hour estimate answers, phase by phase, before you commit to anything. Phase one has a fixed scope and a fixed price.'],
            ['question' => 'Do we need a technical person on our side?', 'answer' => 'No. You need someone who knows the process. The technical decisions are our job.'],
            ['question' => 'Can we start small?', 'answer' => 'Yes. Phase one is deliberately small: the part of the process that costs you most today.'],
        ],

        'CtaName' => 'Drop a line',
        'CtaTitles' => 'Tell us what happens today',
        'CtaText' => 'Within 48 hours you get scope, phases and a budget. Free, and yours to keep even if you work with someone else.',
    ],

    'ServicesRegulated' => [
        'HeadTitle' => 'Software for regulated work: DAC7, labelling, DVLA | Ukrainian IT Family',
        'MetaDescription' => 'Compliance built inside the product, not next to it. DAC7 exports, food labelling, legally significant documents, DVLA transfers. For small companies in Europe.',
        'Breadcrumbs' => ['Homepage', 'Services', 'Regulated products'],
        'PageTitle' => 'Compliance inside the product, not next to it.',
        'PageDescription' => 'When a wrong record means a fine or a legal problem, the rules have to live in the system, not in a checklist next to it. We build products for domains where a mistake in the numbers has a price.',
        'ButtonText' => 'Get a scope and budget',
        'ButtonCaption' => 'In 48 hours. Free, no commitment.',

        'ProblemName' => 'The problem',
        'ProblemTitles' => 'The rule is clear. Following it by hand isn’t',
        'ProblemItems' => [
            ['title' => 'Reporting eats weeks', 'text' => 'Once a year someone pulls data from every system you have and hopes it adds up.'],
            ['title' => 'One change, everything changes', 'text' => 'A supplier changes an ingredient, and every label, sheet and document that uses it has to change too.'],
            ['title' => 'The record is somewhere', 'text' => 'In a PDF, an email, a spreadsheet. Finding it when someone asks takes a day.'],
            ['title' => 'The mistake shows up late', 'text' => 'Not when it’s made, but when an inspector, a client or a court finds it.'],
        ],

        'DomainName' => 'Domains',
        'DomainTitles' => 'Where the rules already live in our code',
        'DomainDescription' => 'We don’t learn your regulation from a blank page. These are the rules we have already built into working products.',
        'DomainItems' => [
            ['title' => 'DAC7 and per-country reporting', 'text' => 'Exports generated from the same data that drives invoices and partner payouts. No separate reporting project.', 'caseName' => 'Andulka', 'caseLink' => '/portfolio/andulka'],
            ['title' => 'Food labelling', 'text' => 'Allergens and nutrition calculated from nested ingredients. Change one ingredient and every product and label that uses it updates. Recipe sheets and labels come out as PDF, ready for internal control and audits.', 'caseName' => 'Catering platform, under NDA', 'caseLink' => null],
            ['title' => 'Legally significant documents', 'text' => 'Qualified electronic signatures, a secure archive, routing, access rights, audit logs and EDI integrations, sold as modules on one base platform.', 'caseName' => 'DiState', 'caseLink' => null],
            ['title' => 'Probation and court supervision', 'text' => 'Case files bound to a person and a case. Monitoring that shows who needs attention right now, before a missed record becomes a legal problem.', 'caseName' => 'OffenderWise', 'caseLink' => '/portfolio/offenderwise'],
            ['title' => 'DVLA plate transfers', 'text' => 'Availability checked with the DVLA before the buyer pays. The transfer handled end to end, with status tracking in the back office.', 'caseName' => 'BigReg', 'caseLink' => '/portfolio/bigreg'],
        ],

        'PrincipleName' => 'Approach',
        'PrincipleTitles' => 'How we build for regulated work',
        'PrincipleItems' => [
            ['title' => 'The regulated output comes first', 'text' => 'The label, the export, the signed document. We design the system around the thing an inspector will read.'],
            ['title' => 'Every change leaves a trace', 'text' => 'History and audit logs are part of the data from day one, not a feature added later.'],
            ['title' => 'Built for reality', 'text' => 'Corrections, disputes, unmatched transactions. The system handles what goes wrong, not only the ideal case.'],
            ['title' => 'Checks before money moves', 'text' => 'BigReg confirms availability before payment. Yachtomator validates every sum before a proposal goes out.'],
        ],

        'CaseName' => 'Case study',
        'CaseTitles' => 'OffenderWise: where a missed record has legal consequences',
        'CaseTags' => ['Justice', 'Compliance'],
        'CaseParagraphs' => [
            'Organisations that supervise people under court and probation programmes track hundreds of people. Each has several cases, payments, restrictions, monitoring events and documents, spread across Excel, PDFs and email. The result is missed violations and legal exposure.',
            'We built an operating system rather than a CRM. The supervised person sits at the centre. Cases, payments, monitoring, documents and time sit around them. Agents, supervisors and admins work in one environment, and the main screen answers one question: who needs attention right now.',
        ],
        'CaseFacts' => [
            ['title' => '9 core entities', 'description' => 'person, case, agent, project, document, payment, balance, monitoring event, time entry'],
            ['title' => '3 user roles', 'description' => 'agent, supervisor, admin'],
            ['title' => 'Daily use', 'description' => 'built for long term operational work'],
        ],
        'CaseLinkText' => 'Read the full case',

        'FitName' => 'Fit',
        'FitTitles' => 'Is this for you',
        'FitYesTitle' => 'Yes, if',
        'FitYesItems' => [
            'A regulation already costs your team weeks a year.',
            'You can’t sell in a market until the product complies.',
            'The cost of a mistake is a fine, a lawsuit or a lost client, not an awkward email.',
        ],
        'FitNoTitle' => 'Not a fit, if',
        'FitNoItems' => [
            'You need a legal opinion. We build the system. Your lawyer confirms the rule.',
        ],

        'FaqName' => 'FAQ',
        'FaqTitles' => 'Questions owners ask us',
        'FaqItems' => [
            ['question' => 'Do you know our regulation?', 'answer' => 'We have shipped DAC7 reporting, food labelling, qualified signatures, probation records and DVLA transfers. If your rule is new to us, we read it with you on the first call and tell you what we know and what we don’t.'],
            ['question' => 'What happens when the rule changes?', 'answer' => 'The team that built the system stays on it. A rule change is a change request, not a new project.'],
            ['question' => 'Can you connect to the systems we already report through?', 'answer' => 'Yes. Our products already integrate with accounting systems and EDI operators. We check your specific connections during the estimate.'],
            ['question' => 'Who is responsible for compliance?', 'answer' => 'You are, with your lawyer or accountant. We make sure the system does exactly what the rule says and shows you the proof.'],
        ],

        'CtaName' => 'Drop a line',
        'CtaTitles' => 'Tell us which rule costs you the most',
        'CtaText' => 'Within 48 hours you get scope, phases and a budget. Free, and yours to keep even if you work with someone else.',
    ],

    'ServicesRescue' => [
        'HeadTitle' => 'Code audit and project rescue | Ukrainian IT Family',
        'MetaDescription' => 'You inherited code nobody can explain. We read it and tell you what to keep, what to fix and what it costs. Sometimes the answer is to leave it alone.',
        'Breadcrumbs' => ['Homepage', 'Services', 'Rescue and restart'],
        'PageTitle' => 'You inherited code nobody can explain.',
        'PageDescription' => 'A contractor left, the project stopped, or someone quoted you a full rewrite. We read the code and tell you the truth, including when the answer is to spend nothing.',
        'ButtonText' => 'Ask for an audit',

        'TriggerName' => 'When to call us',
        'TriggerTitles' => 'This page is for you if',
        'TriggerItems' => [
            ['title' => 'A contractor left', 'text' => 'And nobody can explain how the system works or why it was built this way.'],
            ['title' => 'You hold a rewrite quote', 'text' => 'It’s a big number, and you want a second opinion before you sign.'],
            ['title' => 'Real users broke the demo', 'text' => 'It worked in the presentation. It doesn’t work under real load.'],
            ['title' => 'The project stopped halfway', 'text' => 'You need to know whether it can restart, or whether you’re paying to finish the wrong thing.'],
        ],

        'ArgumentName' => 'The audit',
        'ArgumentTitles' => 'The one purchase that can end with “don’t”',
        'ArgumentParagraphs' => [
            'A rewrite commits you to spending more. So does a refactor. An audit is the only thing you can buy where the best outcome is keeping your money.',
            'Most contractors recommend the rewrite, because it’s the biggest contract on the shelf. We’re fine telling you to do less.',
        ],
        'ArgumentQuote' => 'A client came to us with a six figure quote for a full rewrite. After the audit, the part they wanted to rewrite turned out to be fine. The money stayed with the client.',

        'DeliverableName' => 'What you get',
        'DeliverableTitles' => 'A priced decision, not a 40 page report',
        'DeliverableDescription' => 'A score out of 100 doesn’t tell you where to spend. A ranked list with a cost next to each item does.',
        'DeliverableItems' => [
            ['title' => 'What’s sound', 'text' => 'The parts of the system that work and are worth keeping.'],
            ['title' => 'What nobody can explain', 'text' => 'Code without an owner or a reason, and what that risk is worth to you.'],
            ['title' => 'What to fix and what to leave', 'text' => 'Ranked by risk, with a cost next to each item.'],
            ['title' => 'The honest call', 'text' => 'Refactor, replace in parts, rebuild, or do nothing yet. With the reasons.'],
        ],

        'AuditStepsName' => 'Process',
        'AuditStepsTitles' => 'How the audit works',
        'AuditSteps' => [
            ['title' => 'The call', 'text' => 'What the system does, who built it, what worries you. 30 minutes.'],
            ['title' => 'Access', 'text' => 'Read access to the code and hosting. Nothing changes while we look.'],
            ['title' => 'The decision', 'text' => 'A ranked list of problems with a cost next to each. If we wouldn’t spend the money, we say so.'],
            ['title' => 'If you go ahead', 'text' => 'The team that ran the audit does the work. Or you take the list to anyone you like. It’s yours.'],
        ],

        'ProofName' => 'Proof',
        'ProofTitles' => 'We restart projects, not only review them',
        'ProofItems' => [
            ['title' => 'Restaurant marketplace, under NDA', 'text' => 'An ageing framework migrated to its current version, technical debt reduced, and a new module that fills venue profiles from Google Reviews automatically. The platform got a base it can grow on.'],
            ['title' => 'The rewrite that didn’t happen', 'text' => 'A six figure quote for a full rewrite. The audit showed the part marked for rewriting was fine. The client kept the budget.'],
        ],

        'FaqName' => 'FAQ',
        'FaqTitles' => 'Questions owners ask us',
        'FaqItems' => [
            ['question' => 'You’ll tell me to rewrite everything anyway.', 'answer' => 'A rewrite would be the bigger contract for us. That’s exactly why the audit has to be able to end with “don’t”. If the code is fine, you’ll hear it.'],
            ['question' => 'I’m not technical. Will I understand the result?', 'answer' => 'Yes. Every item comes with what it means for your business and what it costs. No scores, no jargon.'],
            ['question' => 'Do you need the previous contractor?', 'answer' => 'No. Access to the code and hosting is enough. If someone who worked on it is available, 30 minutes with them saves time.'],
            ['question' => 'What if the answer is a rebuild?', 'answer' => 'Then you spend with confidence instead of hope. The point was never to avoid the rebuild. It was to avoid buying it blind.'],
        ],

        'CtaName' => 'Drop a line',
        'CtaTitles' => 'Holding a rewrite quote',
        'CtaText' => 'Send us what you have. We come back with what’s worth keeping and what it would cost to fix the rest.',
    ],

    'ServicesEstimate' => [
        'HeadTitle' => 'Get a scope and budget in 48 hours | Ukrainian IT Family',
        'MetaDescription' => 'Tell us what happens in your business today. Within 48 hours you get scope, phases and price. Free, no commitment.',
        'Breadcrumbs' => ['Homepage', 'Services', 'Get an estimate'],
        'PageTitle' => 'Tell us what happens today.',
        'PageDescription' => 'Within 48 hours you get scope, phases and a budget. Free, and yours to keep even if you work with someone else.',

        'NextTitle' => 'What happens next',
        'NextSteps' => [
            ['title' => 'A reply', 'text' => 'From the people who will do the work, not a sales team.'],
            ['title' => 'A 30 minute call', 'text' => 'About your process, not about technology.'],
            ['title' => 'Scope and budget', 'text' => 'Within 48 hours of the call: what to build, in what phases, how long and how much. In writing.'],
        ],
        'NextNote' => 'Nothing to prepare. If you have documents or screenshots of how the process works today, bring them to the call.',

        'FormLabel' => 'Your project',
        'FormDescription' => 'No 12 page brief needed. A few sentences about your process is enough.',
        'FormFileLabel' => 'Upload a brief (optional)',
    ],

];
