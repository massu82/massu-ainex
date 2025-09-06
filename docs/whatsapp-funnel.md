flowchart LR
Ads[Meta/Google Ads] -->|CTWA| WA[WhatsApp Entry Point]
WA --> Router{Intención: CATALOGO / CITA / ASESOR}
Router -->|CATALOGO| Assets[PDF / Landing]
Router -->|CITA| Sched[Scheduler (Calendly/Calendar API)]
Router -->|ASESOR| Agent[Inbox Humano/CRM Inbox]
Router --> Capture[Captura mínima + Scoring]
Capture --> CRM[(CRM / Data Lake)]
CRM --> BI[(Dashboards)]
Capture --> Events[GA4 & Meta CAPI]
Events --> Ads
Agent --> CRM
Sched --> CRM
