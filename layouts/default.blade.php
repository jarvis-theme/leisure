<!DOCTYPE html>
<html>
    <head>
        {{ Theme::partial('seostuff') }}    
        {{ Theme::partial('defaultcss') }}  
        {{ Theme::asset()->styles() }}  
    </head>
    <body>
        {{ Theme::partial('header') }}  
        <div class="section_container">
            <section>
                {{ Theme::place('content') }}   
                {{ Theme::partial('subscribe') }}   
            </section>
        </div>
        {{ Theme::partial('footer') }}  
        {{ Theme::partial('defaultjs') }}   
        {{-- Theme::asset()->scripts() --}}
        {{-- Theme::asset()->container('footer')->scripts() --}}
        {{ Theme::partial('analytic') }}    
    </body>
</html>