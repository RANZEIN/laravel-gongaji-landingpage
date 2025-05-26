<section id="faq" class="faq position-relative overflow-hidden">
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <small class="fs-7 d-block">Frequently Asked Questions</small>
                <h2 class="fs-3 text-black mb-0">Want to ask something from us?</h2>
            </div>
        </div>
        <div class="accordion-block">
            <div class="accordion row" id="accordionPanelsStayOpenExample">
                @php
                    $leftFaqs = array_slice($faqs, 0, 3);
                    $rightFaqs = array_slice($faqs, 3, 3);
                @endphp

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    @foreach($leftFaqs as $index => $faq)
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header" id="panelsStayOpen-heading{{ $index + 1 }}">
                            <button class="accordion-button {{ !$faq['show'] ? 'collapsed' : '' }} text-black fs-7" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{ $index + 1 }}" aria-expanded="{{ $faq['show'] ? 'true' : 'false' }}" aria-controls="panelsStayOpen-collapse{{ $index + 1 }}">
                                {{ $faq['question'] }}
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapse{{ $index + 1 }}" class="accordion-collapse collapse {{ $faq['show'] ? 'show' : '' }}" aria-labelledby="panelsStayOpen-heading{{ $index + 1 }}">
                            <div class="accordion-body fs-7 fw-500 pt-0">
                                {{ $faq['answer'] }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    @foreach($rightFaqs as $index => $faq)
                    <div class="accordion-item mb-3">
                        <h2 class="accordion-header" id="panelsStayOpen-heading{{ $index + 4 }}">
                            <button class="accordion-button collapsed text-black fs-7" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{ $index + 4 }}" aria-expanded="false" aria-controls="panelsStayOpen-collapse{{ $index + 4 }}">
                                {{ $faq['question'] }}
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapse{{ $index + 4 }}" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading{{ $index + 4 }}">
                            <div class="accordion-body fs-7 fw-500 pt-0">
                                {{ $faq['answer'] }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
