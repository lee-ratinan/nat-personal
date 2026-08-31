<?php
return [
    'title'        => 'PORTFOLIO',
    'title-name'   => 'Ratinan “Nat” Lee',
    'subtitle'     => 'Scrum in Action | My Journey as a Scrum Master, Tech Lead, Project Manager',
    'intro'        => [
        'name'          => 'Ratinan “Nat” Leela-Ngamwongsa',
        'other-names'   => 'รตินันท์ ลีลางามวงศา (นัท) | 李榮欽 | 力川栄欽 | ·𐑮𐑳𐑑𐑦𐑯𐑳𐑯 𐑤𐑰',
        'nationality'   => 'Nationality: <b>Thai</b>',
        'residency'     => 'Residency: <b>Singapore (permanent residence)</b>',
        'language'      => 'Language: <b>Thai</b> (native), <b>English</b> (fluent; CEFR C2 level), <b>Japanese</b> (beginner; CEFR A1 level, aim for N5 by 2027), <b>Taiwanese</b> (beginner; CEFR A1 level)',
        'linkedin'      => 'LinkedIn:',
        'business-card' => 'Business Card:',
    ],
    'who-am-i'     => [
        'title' => 'Who am I?',
        'para'  => 'With <b>{0} years</b> of industry experience—including <b>{1} years</b> leading high-performing development teams in <b>e-Commerce</b> and <b>FinTech</b> — I specialize in driving <b>Agile</b> transformations that deliver high-impact products. A champion of continuous optimization, I combine hands-on technical leadership with advanced governance, backed by <b>PSM</b> II, <b>PSPO</b> II, <b>CSM</b>, Google <b>AI Essentials</b> and Google <b>Project Management</b> certifications. My expertise lies in building resilient cross-functional teams, streamlining workflows, and fostering a collaborative culture that translates complex engineering efforts into tangible business value.'
    ],
    'para'         => [
        'as-a-scrum-master' => 'As a <b>Scrum Master</b>, I focus on optimizing team dynamics, removing systemic impediments, and expanding cross-functional capabilities. As a <b>Product Owner</b>, I ensure we maximize product value with every sprint. Wearing the <b>Project Manager</b> hat, I balance the project management triangle—aligning scope, time, and cost to deliver predictable outcomes for stakeholders, engineers, and customers alike. I firmly believe that high performance shouldn’t come at the cost of sustainability; I actively manage boundaries to prevent scope creep and eliminate artificial urgency. My ultimate goal is to foster an environment where a team can deliver high-impact products consistently — without burnout.',
        'empowering'        => 'Empowering Teams for Sustainable Excellence',
        'true-leadership'   => 'True leadership is about unlocking potential through structured enablement. As a Project Manager, I optimize the triple constraints of time, resources, and scope to build a predictable engineering environment. As a Scrum Master, I protect the team’s focus, remove systemic impediments, and champion agile principles to steadily increase delivery velocity. Simultaneously, as a Product Owner, I maximize product value per sprint by ensuring developers operate with absolute requirement clarity. My ultimate goal is to remove friction and cultivate a resilient, self-organizing team equipped to deliver high-impact engineering excellence.',
    ],
    'case-studies' => [
        'title'     => 'Case Studies',
        'challenge' => 'The Challenge',
        'solution'  => 'The Solution',
        'impact'    => 'The Impact',
        'details'   => [
            '1' => [
                'title'     => 'From Chaos to Clarity – Implementing Agile Governance',
                'challenge' => 'The organization suffered from severe delivery friction caused by a lack of structured scheduling and premature project initiation. Without stabilized requirements, teams experienced constant mid-sprint pivots, leading to chronic scope creep and missed milestones. Because the structural flaws were invisible, developers were unfairly held accountable for systemic delivery delays, destroying team morale.',
                'solution'  => [
                    'Established Structured Governance: Introduced a rigorous cadence of Scrum events to stabilize the delivery pipeline, establish predictable scheduling, and eliminate daily ambiguity.',
                    'Cultivated Engineering Accountability: Anchored the transformation in core Scrum values—Commitment, Openness, Focus, Respect, and Courage—shifting the team culture from passive task-execution to true ownership.',
                    'Implemented Active Scope Management: Enforced a strict trade-off negotiation framework for incoming requirements. New features were welcomed into the product backlog but were barred from disrupting active Sprint Goals unless matching scope was swapped out.'
                ],
                'impact'    => [
                    'Eliminated Execution Ambiguity: Developers gained complete clarity on upcoming priorities, drastically reducing context-switching and operational frustration.',
                    'Stabilized the Delivery Pipeline: Transformed scope creep from a disruptive risk into a manageable, transparent negotiation process, protecting the integrity of the release cycle.',
                    'Achieved Predictable Velocity: By protecting Sprint Goals from external volatility, the team consistently met its deliverables and stabilized project timelines.'
                ]
            ],
            '2' => [
                'title'     => 'Taming Complex Requirements – Architectural Alignment & Cost Optimization',
                'challenge' => 'The platform suffered from severe performance degradation and daily system outages driven by a misalignment between business requirements and technical constraints. Non-technical stakeholders routinely requested impractical, synchronous real-time features that choked system resources. This structural overload resulted in chronic instability, impaired critical warehouse operations, and caused server infrastructure costs to skyrocket due to highly inefficient processing patterns.',
                'solution'  => [
                    'Architected Async Decoupling: Spearheaded the refactoring of the system architecture by eliminating unneeded real-time synchronous dependencies and enforcing asynchronous processing for resource-heavy operations.',
                    'Optimized Core Algorithms: Directed targeted engineering interventions to optimize legacy data structures and processing algorithms, fundamentally improving system throughput, scalability, and baseline stability.',
                    'Established Cross-Functional Governance: Implemented a continuous requirement-review framework with business teams, educating stakeholders on technical boundaries and ensuring all feature requests were value-driven and architecturally viable.',
                    'Executed Targeted Triage: Stabilized the immediate production environment by introducing a disciplined, single-issue triage methodology to systematically eliminate active failure points without introducing regression risks.'
                ],
                'impact'    => [
                    'Restored System Integrity: Transformed a volatile environment into a highly stable infrastructure, completely eliminating daily system crashes and vastly improving platform speed.',
                    'Halved Infrastructure Overhead: Reduced server operational costs by 50%, delivering immediate, compounding fiscal savings to the company’s bottom line.',
                    'Enhanced Operational Velocity: Greatly improved end-user satisfaction by streamlining the platform, directly enabling faster, friction-free warehouse logistics.'
                ]
            ],
            '3' => [
                'title'     => 'Reifying Infrastructure Scalability – Resolving Cross-Functional Communication Silos',
                'challenge' => 'A critical communication disconnect between business intelligence and engineering led to a catastrophic production failure during a high-profile product launch. Marketing data regarding an impending, massive traffic surge (driven by a major franchise campaign) was never shared with the technical team. Consequently, engineering optimized exclusively at the source-code level without scaling the underlying infrastructure. Upon launch, the unprecedented concurrent user traffic overwhelmed the network layer, triggering server crashes despite highly efficient code execution.',
                'solution'  => [
                    'Architected Cloud Auto-Scaling: Spearheaded the modernization of the deployment architecture by implementing AWS Elastic Beanstalk to dynamically handle high-traffic volatility and ensure high availability for customer-facing applications.',
                    'Decoupled System Environments: Mitigated architectural risk by isolating internal operational systems on dedicated Amazon EC2 instances, ensuring core business functions remained unaffected by external traffic spikes on customer-facing layers.',
                    'Established Dedicated DevOps Governance: Onboarded dedicated infrastructure engineering expertise to design proactive monitoring, capacity planning, and predictive system-load trending models.',
                    'Educated Executive Stakeholders: Leveraged the post-mortem analysis to demonstrate the critical link between infrastructure investment and business continuity, securing executive buy-in for long-term cloud infrastructure funding.'
                ],
                'impact'    => [
                    'Eliminated Single Points of Failure: Successfully prevented any recurrence of traffic-driven outages, establishing a reliable, seamless digital experience for end-users.',
                    'Automated Elastic Volatility Management: Empowered the platform to automatically scale compute resources dynamically ahead of traffic curves, mitigating the risk of future campaign spikes.',
                    'Secured Strategic Infrastructure Buy-In: Transformed organizational culture by permanently closing the gap between marketing planning and engineering preparation, ensuring all future product launches are backed by aligned capacity planning.'
                ]
            ]
        ]
    ],
    'blog'         => [
        'title'     => 'Read My Blog',
        'read-more' => 'Read More'
    ]
];