<?php
$xmlstr = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<rdf:RDF
    xmlns:dct="http://purl.org/dc/terms/"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:dcat="http://www.w3.org/ns/dcat#"
    xmlns:vcard="http://www.w3.org/2006/vcard/ns#"
    xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
>
    <dcat:Dataset rdf:about="https://opendata.swiss/dataset/c7bd7937-2d3f-41f6-bfb1-c6ade7da5d2f">
        <dcat:theme rdf:resource="http://opendata.swiss/themes/geography"/>
        <dct:modified rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2018-09-18T07:33:44.933799</dct:modified>
        <dcat:keyword xml:lang="en">air-pollutant</dcat:keyword>
        <dct:description xml:lang="de">Hektarraster für Stickstoffdioxid (NO2) und Feinstaub (PM10) im Kanton Thurgau als WMS-Dienst</dct:description>
        <dct:publisher>
            <rdf:Description rdf:nodeID="N0f3735a8f2a3423fbecf0110c1c07530">
                <rdfs:label>Kantonale Verwaltung Thurgau</rdfs:label>
            </rdf:Description>
        </dct:publisher>
        <dct:title xml:lang="de">Luftschadstoffbelastung (Geodienst)</dct:title>
        <dcat:keyword xml:lang="fr">polluant-atmospherique</dcat:keyword>
        <dcat:contactPoint>
            <vcard:Organization rdf:nodeID="Nebbcc6158b6b4e61aad1cea5c7f9bf53">
                <vcard:hasEmail rdf:resource="ogd.sk@tg.ch"/>
                <vcard:fn>ogd.sk@tg.ch</vcard:fn>
            </vcard:Organization>
        </dcat:contactPoint>
        <dcat:distribution>
            <dcat:Distribution rdf:about="https://opendata.swiss/dataset/c7bd7937-2d3f-41f6-bfb1-c6ade7da5d2f/resource/8df5cd10-f338-4759-8d18-9890490dfb16">
                <dct:title>GetCapabilities</dct:title>
                <dcat:accessURL rdf:resource="https://map.geo.tg.ch/proxy/geofy_chsdi3/luftbelastung-stickstoff?access_key=YoW2syIQ4xe0ccJA&amp;Service=WMS&amp;Version=1.3.0&amp;Request=GetCapabilities"/>
                <dct:rights>NonCommercialAllowed-CommercialAllowed-ReferenceRequired</dct:rights>
                <dct:issued rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2015-05-28T02:00:00</dct:issued>
                <dcat:mediaType>Web application</dcat:mediaType>
                <dct:description>Hektarraster für Stickstoffdioxid (NO2) und Feinstaub (PM10) im Kanton Thurgau als WMS-Dienst</dct:description>
                <dct:format>SERVICE</dct:format>
            </dcat:Distribution>
        </dcat:distribution>
        <dcat:keyword xml:lang="de">luftschadstoff</dcat:keyword>
        <dct:issued rdf:datatype="http://www.w3.org/2001/XMLSchema#dateTime">2015-05-28T02:00:00</dct:issued>
        <dcat:keyword xml:lang="it">inquinante-atmosferico</dcat:keyword>
        <dcat:landingPage>https://geoinformation.tg.ch</dcat:landingPage>
        <dct:identifier>d9726fbe-b0d2-48c3-b487-69fbcfa5c20a@kanton-thurgau</dct:identifier>
    </dcat:Dataset>
</rdf:RDF>
XML;
?>