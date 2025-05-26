@extends('layouts.app')

@section('title', 'Gongaji Landing Page - Discover Your Visual Investment Manager')

@section('content')
    @include('sections.hero')
    @include('sections.service', ['services' => $services])
    @include('sections.our-service')
    @include('sections.portfolio', ['features' => $portfolioFeatures])
    @include('sections.pricing', ['plans' => $pricingPlans])
    @include('sections.faq', ['faqs' => $faqs])
    @include('sections.contact', ['testimonials' => $testimonials, 'companies' => $trustedCompanies])
@endsection

@push('scripts')
<script>
    // Display success messages
    @if(session('success'))
        alert('{{ session('success') }}');
    @endif

    // Auto update year
    document.getElementById('autodate').textContent = new Date().getFullYear();
</script>
@endpush
