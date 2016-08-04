<header class="main">
    <section class="cover">
        <div class="layout-table">
            <div class="layout-row">
                <div class="logo">
                @if(config('pakgekit.branding') && config('pakgekit.brand.logo'))
                    <img src="/img/{{ config('pagekit.brand.logo' )}}" title="{{ config('pagekit.company_name') }} />
                @endif
                    <h1>Laravel.Page.Kit</h1>
                    <p class="lead">
                        Quick start pages for Laravel.
                    </p>
                </div>
            </div>
        </div>
    </section>
</header>
