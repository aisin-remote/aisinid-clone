<div class="js-cookie-consent cookie-consent fixed-bottom bg-light p-3">
    <div class="container">
        <div class="alert alert-light d-flex justify-content-between align-items-center mb-0" role="alert">
            <div class="flex-grow-1">
                <p class="mb-0 cookie-consent__message">
                    {!! trans('cookie-consent::texts.message') !!}
                </p>
            </div>
            <div>
                <button class="js-cookie-consent-agree cookie-consent__agree btn btn-primary btn-lg">
                    {{ trans('cookie-consent::texts.agree') }}
                </button>
            </div>
        </div>
    </div>
</div>
