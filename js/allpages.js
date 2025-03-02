(function(b, c) {
    var $ = b.jQuery || b.Cowboy || (b.Cowboy = {}),
        a;
    $.throttle = a = function(e, f, j, i) {
        var h, d = 0;
        if (typeof f !== "boolean") {
            i = j;
            j = f;
            f = c
        }

        function g() {
            var o = this,
                m = +new Date() - d,
                n = arguments;

            function l() {
                d = +new Date();
                j.apply(o, n)
            }

            function k() { h = c }
            if (i && !h) { l() }
            h && clearTimeout(h);
            if (i === c && m > e) { l() } else { if (f !== true) { h = setTimeout(i ? k : l, i === c ? e - m : e) } }
        }
        if ($.guid) { g.guid = j.guid = j.guid || $.guid++ }
        return g
    };
    $.debounce = function(d, e, f) { return f === c ? a(d, e, false) : a(d, f, e !== false) }
})(this);
var sections = document.querySelector(".menu");
var links = document.querySelectorAll(".menu-wrapper");
var bgWrapper = document.querySelector(".menu-bg-wrapper");
var bg = document.querySelector(".menu-bg");
var arrow = document.querySelector(".menu-arrow");
var bgBCR = bg.getBoundingClientRect();
sections.addEventListener("mouseover", function() {
    setTimeout(function() {
        bg.classList.add("is-animatable");
        arrow.classList.add("is-animatable");
    });
});
sections.addEventListener("mouseleave", function() {
    bg.classList.remove("is-animatable");
    arrow.classList.remove("is-animatable");
});
[].forEach.call(links, function(link) {
    link.addEventListener("mouseover", function() {
        bgWrapper.classList.add("is-visible");
        var links = this.querySelector(".sub-menu");
        var linksBCR = links.getBoundingClientRect();
        var scaleX = linksBCR.width / bgBCR.width;
        var scaleY = linksBCR.height / bgBCR.height;
        var arrowX = linksBCR.width / 2 + linksBCR.left;
        bg.style.transform = "translate(" + linksBCR.left + "px) scale(" + scaleX + ", " + scaleY + ") rotateX(0deg)";
        arrow.style.transform = "translate(" + arrowX + "px) rotate(45deg)";
    });
    link.addEventListener("mouseleave", function() { bgWrapper.classList.remove("is-visible"); });
});
(function($) {
    var $body = $('body'),
        $html = $('html'),
        $section = $('section'),
        $input_wrapper_class = '.et_manage_input',
        $form_field = $section.find($input_wrapper_class),
        $empty_inputs = $section.find('input').filter(function() { return $(this).val() != ""; }),
        $pricing_button_wrapper = $('.login-button-wrapper'),
        $main_header = $('#main-header'),
        $main_nav = $('#main-nav'),
        $logo = $('#logo'),
        $menu = $('#main-nav nav'),
        $menu_item = $('.menu-item'),
        $menu_callout = $('.menu-callout'),
        $accounts_button = $('#accounts-button'),
        $transparent_header = $('.transparent-header'),
        $cta = $('#bottom-call-to-action'),
        $pricing_tables = $('#pricing-tables-bottom'),
        $highlightable = $('.et-highlightable'),
        $rellax_active = $('.rellax'),
        $popup = $('.video-popup'),
        $popup_button = $('.video-popup-button'),
        $popup_join_button = $('.video-popup-join-button'),
        $hamburger_menu = $('.hamburger'),
        $delete_api_key_popup = $('.delete-api-key'),
        $solid_header = $('.solid-header'),
        fixed_class = 'et_fixed_nav',
        filled_class = 'et_filled',
        highlighted_class = 'et-highlighted',
        highlighted_hidden_class = 'et-highlighted-hidden',
        window_width = $(window).width(),
        click_to_copy_class = '.click-to-copy';
    document.addEventListener("DOMContentLoaded", function() { yall({ threshold: 1500 }); });
    $(document).ready(function() {
        $('body').addClass('js-ready');
        if ($rellax_active.length) {
            var rellax = new Rellax('.rellax', { center: true });
            $(window).on("load", function() { setTimeout(function() { rellax.refresh(); if (window_width < 1120) { rellax.destroy(); } }, 400); });
            $(window).resize($.throttle(500, function() {
                var window_width = $(window).width()
                if (window_width < 1120) { rellax.destroy(); }
                if (window_width >= 1120) { rellax.refresh(); }
            }));
        }
    });
    $(document).ready(function() {
        $($popup).magnificPopup({ type: 'iframe', mainClass: 'mfp-fade', preloader: false, fixedContentPos: false });
        $($popup).click(function() { $($popup_join_button).fadeIn(500); });
    });
    $(document).on('click', '.mfp-wrap', function() { $($popup_join_button).hide(); });
    $(document).on('click', '.mfp-close', function() { $($popup_join_button).hide(); });
    $(window).scroll(function() { $(".gallery-hero").css("transform", "scale(" + ($(this).scrollTop() / 1800 + 1) + ")"); });
    $menu_callout.click(function() {
        var link = $(this).prev().attr('href');
        window.location.href = link;
    });
    $hamburger_menu.click(function() {
        $(this).toggleClass('toggled');
        $menu.toggleClass('toggled');
        $body.toggleClass('mobile-menu');
        $html.toggleClass('mobile-menu');
        if ($body.hasClass('mobile-menu')) { $main_nav.find($logo).find('img').attr('src', '/computercastleswebsite/images/CCL Logo.jpg'); } else if (!$body.hasClass('mobile-menu') && $main_nav.hasClass('transparent-header') && !$main_nav.hasClass('et_fixed_nav')) { $transparent_header.find($logo).find('img').attr('src', '/computercastleswebsite/images/CCL Logo.jpg'); }
    });
    $accounts_button.click(function() {
        if ($body.hasClass('mobile-menu')) {
            $hamburger_menu.toggleClass('toggled');
            $menu.toggleClass('toggled');
            $body.toggleClass('mobile-menu');
        }
    });
    $(window).bind("load scroll", $.throttle(200, function() {
        var scroll = $(window).scrollTop(),
            scrollPosition = $body.offset().top
        if (scroll > scrollPosition & !$main_nav.hasClass(fixed_class)) {
            $main_nav.addClass(fixed_class);
            $transparent_header.find($logo).find('img').attr('src', '/images/logo.svg');
        } else if (scroll <= scrollPosition) {
            $main_nav.removeClass(fixed_class);
            $transparent_header.find($logo).find('img').attr('src', '/images/logo-light.svg');
        }
    }));
    $(window).scroll($.debounce(200, function() {
        var scrollPercentage = 100 * ($(this).scrollTop() / $body.height());
        if (scrollPercentage > 50) {
            $($pricing_button_wrapper).addClass(highlighted_class);
            $($pricing_button_wrapper).find('.button').addClass('highlight-login-button').removeClass('accent-pink');
        } else {
            $($pricing_button_wrapper).removeClass(highlighted_class);
            $($pricing_button_wrapper).find('.button').removeClass('highlight-login-button').addClass('accent-pink');
        }
    }));
    if ($highlightable.length) {
        $(window).scroll($.throttle(100, function() {
            var scroll = $(window).scrollTop(),
                itemHeight = $highlightable.height();
            highlightStart = $highlightable.offset().top - 600;
            highlightEnd = $highlightable.offset().top + itemHeight / 4;
            if (scroll > highlightStart & scroll < highlightEnd) {
                $highlightable.addClass(highlighted_class);
                $body.addClass(highlighted_hidden_class);
            } else {
                $highlightable.removeClass(highlighted_class);
                $body.removeClass(highlighted_hidden_class);
            }
            if ($(window).scrollTop() + $(window).height() > $(document).height() - 50) {
                $highlightable.removeClass(highlighted_class);
                $body.removeClass(highlighted_hidden_class);
            }
        }));
    }
    $cta.click(function() {
        var link = $(this).find('.button').attr('href');
        window.location.href = link;
    });
    $form_field.focusin(function() { $(this).addClass(filled_class); }).focusout(function() { var $this = $(this); if ($this.find('input').val() === '') { $this.removeClass(filled_class); } });
    $empty_inputs.parent($input_wrapper_class).addClass(filled_class);
    $('.accordion a').click(function(j) {
        var dropDown = $(this).closest('li').find('p');
        $(this).closest('.accordion').find('p').not(dropDown).slideUp();
        if ($(this).hasClass('active')) { $(this).removeClass('active'); } else {
            $(this).closest('.accordion').find('a.active').removeClass('active');
            $(this).addClass('active');
        }
        dropDown.stop(false, true).slideToggle();
        j.preventDefault();
    });
    $('.menu-item').click(function(j) {
        var $dropDown = $(this).next('.sub-menu'),
            $parent = $(this).parent('.menu-wrapper'),
            window_width = $(window).width()
        if (window_width <= 1024) {
            j.preventDefault();
            $(this).closest('.menu').find('.sub-menu').not($dropDown).slideUp();
            if ($parent.hasClass('active')) { $parent.removeClass('active'); } else {
                $parent.parent('.menu').find('li.active').removeClass('active');
                $parent.addClass('active');
            }
            $dropDown.stop(false, true).slideToggle();
        }
    });
    $('body').on('click', click_to_copy_class, function() {
        $(this).select();
        document.execCommand("copy");
        $(this).parent().find(".copy-status").addClass("copy-success").text("Copied!");
    }).on('mouseenter', click_to_copy_class, function() {
        if ($(this).closest('.et_api_key').hasClass('et_deactivated_key')) { copy_text = 'Disabled API Key'; } else { copy_text = 'Click To Copy'; }
        $(this).parent().append('<span class="copy-status elevation-1">' + copy_text + '</span>');
    }).on('mouseleave', click_to_copy_class, function() { $(this).parent().find(".copy-status").remove(); });
    $('section').on('click', '.et_delete_key', function() {
        $delete_api_key_popup.removeClass('show-warning');
        $(this).next($delete_api_key_popup).addClass('show-warning');
    });
    $('section').on('click', '.api-exit-button', function() { $(this).parent($delete_api_key_popup).removeClass('show-warning'); });
    $(".tabs a").click(function(e) {
        e.preventDefault();
        var $this = $(this),
            $parent = $this.closest("#builder-preview"),
            tab_id = $this.attr("href"),
            $tab_group = $parent.find("#tab-group"),
            $this_video = $parent.find(tab_id),
            $this_video_source = $this_video.children("source"),
            $this_video_src = $this_video_source.attr("video-src"),
            $active_link = $parent.find("a.current-item"),
            $active_video = $parent.find("video.current-item"),
            $active_video_height = $active_video.height()
        $tab_group.height($active_video_height);
        $active_link.removeClass("current-item");
        $active_video.removeClass("current-item").children("source").removeAttr("src");
        $active_video[0].load();
        $this_video_source.attr("src", $this_video_src);
        $this.addClass("current-item");
        $this_video.addClass("current-item");
        $this_video[0].load();
    });
    $.ajax({ url: '/api/logged_in_check.php', dataType: 'json' }).done(function(data) {
        var $account_dropdown = $('.et-main-account-menu'),
            $logged_in_items = $account_dropdown.find('.menu-items'),
            $logged_in_button = $account_dropdown.find('#account-downloads-button'),
            $logged_out_items = $account_dropdown.find('.et_account_login_form');
        if (typeof data.result === 'undefined') { data.result = false; }
        if (typeof data.token !== 'undefined') { $logged_out_items.find('input.et_token_field').val(data.token); }
        $logged_in_items.toggle(data.result);
        $logged_in_button.toggle(data.result);
        $logged_out_items.toggle(!data.result);
    });
})(jQuery)