{{-- Organization / ProfessionalService --}}
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": ["Organization","ProfessionalService"],
      "@id": "https://massuttier.com/#organization",
      "name": "Massuttier",
      "url": "https://massuttier.com/",
      "logo": "https://massuttier.com/storage/logo-massuttier.png",
      "image": "https://massuttier.com/storage/og-image-massuttier.jpg",
      "description": "Agencia de visualización arquitectónica, desarrollo web en Laravel y marketing digital orientado a resultados.",
      "contactPoint": [{
        "@type": "ContactPoint",
        "contactType": "Ventas",
        "telephone": "+52-442-259-3837",
        "email": "hola@massuttier.com",
        "areaServed": "MX",
        "availableLanguage": ["es","en"]
      }],
      "address": {
        "@type": "PostalAddress",
        "addressCountry": "MX",
        "addressRegion": "Querétaro"
      },
      "sameAs": [
        "https://www.facebook.com/massuttier",
        "https://www.instagram.com/massuttier",
        "https://www.linkedin.com/company/massuttier",
        "https://www.youtube.com/@massuttier"
      ],
      "hasOfferCatalog": { "@id": "https://massuttier.com/#services" }
    }
</script>

{{-- WebSite (+ SearchAction opcional) --}}
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "@id": "https://massuttier.com/#website",
      "url": "https://massuttier.com/",
      "name": "Massuttier",
      "inLanguage": "es-MX",
      "publisher": { "@id": "https://massuttier.com/#organization" },
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://massuttier.com/buscar?q={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
</script>

{{-- OfferCatalog (servicios) --}}
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "OfferCatalog",
      "@id": "https://massuttier.com/#services",
      "name": "Servicios de Massuttier",
      "itemListElement": [
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Desarrollo web en Laravel (CMS a medida)", "serviceType": "Desarrollo Web", "provider": { "@id": "https://massuttier.com/#organization" }, "areaServed": "MX" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Visualización arquitectónica (renders)", "serviceType": "Arquitectura / Renders", "provider": { "@id": "https://massuttier.com/#organization" }, "areaServed": "MX" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Marketing digital (Meta & Google)", "serviceType": "Marketing Digital", "provider": { "@id": "https://massuttier.com/#organization" }, "areaServed": "MX" } },
        { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "CRM y automatizaciones", "serviceType": "Implementación CRM", "provider": { "@id": "https://massuttier.com/#organization" }, "areaServed": "MX" } }
      ]
    }
</script>
