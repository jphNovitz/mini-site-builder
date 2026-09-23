<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @fonts

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */ @layer properties{@supports (((-webkit-hyphens:none)) and (not (margin-trim:inline))) or ((-moz-orient:inline) and (not (color:rgb(from red r g b)))){*,:before,:after,::backdrop{--tw-translate-x:0;--tw-translate-y:0;--tw-translate-z:0;--tw-rotate-x:initial;--tw-rotate-y:initial;--tw-rotate-z:initial;--tw-skew-x:initial;--tw-skew-y:initial;--tw-space-x-reverse:0;--tw-border-style:solid;--tw-leading:initial;--tw-font-weight:initial;--tw-tracking:initial;--tw-shadow:0 0 #0000;--tw-shadow-color:initial;--tw-shadow-alpha:100%;--tw-inset-shadow:0 0 #0000;--tw-inset-shadow-color:initial;--tw-inset-shadow-alpha:100%;--tw-ring-color:initial;--tw-ring-shadow:0 0 #0000;--tw-inset-ring-color:initial;--tw-inset-ring-shadow:0 0 #0000;--tw-ring-inset:initial;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-offset-shadow:0 0 #0000;--tw-blur:initial;--tw-brightness:initial;--tw-contrast:initial;--tw-grayscale:initial;--tw-hue-rotate:initial;--tw-invert:initial;--tw-opacity:initial;--tw-saturate:initial;--tw-sepia:initial;--tw-drop-shadow:initial;--tw-drop-shadow-color:initial;--tw-drop-shadow-alpha:100%;--tw-drop-shadow-size:initial;--tw-duration:initial;--tw-ease:initial;--tw-content:""}}}@layer theme{:root,:host{--font-sans:"Instrument Sans", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";--font-serif:ui-serif, Georgia, Cambria, "Times New Roman", Times, serif;--font-mono:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;--color-red-50:oklch(97.1% .013 17.38);--color-red-100:oklch(93.6% .032 17.717);--color-red-200:oklch(88.5% .062 18.334);--color-red-300:oklch(80.8% .114 19.571);--color-red-400:oklch(70.4% .191 22.216);--color-red-500:oklch(63.7% .237 25.331);--color-red-600:oklch(57.7% .245 27.325);--color-red-700:oklch(50.5% .213 27.518);--color-red-800:oklch(44.4% .177 26.899);--color-red-900:oklch(39.6% .141 25.723);--color-red-950:oklch(25.8% .092 26.042);--color-orange-50:oklch(98% .016 73.684);--color-orange-100:oklch(95.4% .038 75.164);--color-orange-200:oklch(90.1% .076 70.697);--color-orange-300:oklch(83.7% .128 66.29);--color-orange-400:oklch(75% .183 55.934);--color-orange-500:oklch(70.5% .213 47.604);--color-orange-600:oklch(64.6% .222 41.116);--color-orange-700:oklch(55.3% .195 38.402);--color-orange-800:oklch(47% .157 37.304);--color-orange-900:oklch(40.8% .123 38.172);--color-orange-950:oklch(26.6% .079 36.259);--color-amber-50:oklch(98.7% .022 95.277);--color-amber-100:oklch(96.2% .059 95.617);--color-amber-200:oklch(92.4% .12 95.746);--color-amber-300:oklch(87.9% .169 91.605);--color-amber-400:oklch(82.8% .189 84.429);--color-amber-500:oklch(76.9% .188 70.08);--color-amber-600:oklch(66.6% .179 58.318);--color-amber-700:oklch(55.5% .163 48.998);--color-amber-800:oklch(47.3% .137 46.201);--color-amber-900:oklch(41.4% .112 45.904);--color-amber-950:oklch(27.9% .077 45.635);--color-yellow-50:oklch(98.7% .026 102.212);--color-yellow-100:oklch(97.3% .071 103.193);--color-yellow-200:oklch(94.5% .129 101.54);--color-yellow-300:oklch(90.5% .182 98.111);--color-yellow-400:oklch(85.2% .199 91.936);--color-yellow-500:oklch(79.5% .184 86.047);--color-yellow-600:oklch(68.1% .162 75.834);--color-yellow-700:oklch(55.4% .135 66.442);--color-yellow-800:oklch(47.6% .114 61.907);--color-yellow-900:oklch(42.1% .095 57.708);--color-yellow-950:oklch(28.6% .066 53.813);--color-lime-50:oklch(98.6% .031 120.757);--color-lime-100:oklch(96.7% .067 122.328);--color-lime-200:oklch(93.8% .127 124.321);--color-lime-300:oklch(89.7% .196 126.665);--color-lime-400:oklch(84.1% .238 128.85);--color-lime-500:oklch(76.8% .233 130.85);--color-lime-600:oklch(64.8% .2 131.684);--color-lime-700:oklch(53.2% .157 131.589);--color-lime-800:oklch(45.3% .124 130.933);--color-lime-900:oklch(40.5% .101 131.063);--color-lime-950:oklch(27.4% .072 132.109);--color-green-50:oklch(98.2% .018 155.826);--color-green-100:oklch(96.2% .044 156.743);--color-green-200:oklch(92.5% .084 155.995);--color-green-300:oklch(87.1% .15 154.449);--color-green-400:oklch(79.2% .209 151.711);--color-green-500:oklch(72.3% .219 149.579);--color-green-600:oklch(62.7% .194 149.214);--color-green-700:oklch(52.7% .154 150.069);--color-green-800:oklch(44.8% .119 151.328);--color-green-900:oklch(39.3% .095 152.535);--color-green-950:oklch(26.6% .065 152.934);--color-emerald-50:oklch(97.9% .021 166.113);--color-emerald-100:oklch(95% .052 163.051);--color-emerald-200:oklch(90.5% .093 164.15);--color-emerald-300:oklch(84.5% .143 164.978);--color-emerald-400:oklch(76.5% .177 163.223);--color-emerald-500:oklch(69.6% .17 162.48);--color-emerald-600:oklch(59.6% .145 163.225);--color-emerald-700:oklch(50.8% .118 165.612);--color-emerald-800:oklch(43.2% .095 166.913);--color-emerald-900:oklch(37.8% .077 168.94);--color-emerald-950:oklch(26.2% .051 172.552);--color-teal-50:oklch(98.4% .014 180.72);--color-teal-100:oklch(95.3% .051 180.801);--color-teal-200:oklch(91% .096 180.426);--color-teal-300:oklch(85.5% .138 181.071);--color-teal-400:oklch(77.7% .152 181.912);--color-teal-500:oklch(70.4% .14 182.503);--color-teal-600:oklch(60% .118 184.704);--color-teal-700:oklch(51.1% .096 186.391);--color-teal-800:oklch(43.7% .078 188.216);--color-teal-900:oklch(38.6% .063 188.416);--color-teal-950:oklch(27.7% .046 192.524);--color-cyan-50:oklch(98.4% .019 200.873);--color-cyan-100:oklch(95.6% .045 203.388);--color-cyan-200:oklch(91.7% .08 205.041);--color-cyan-300:oklch(86.5% .127 207.078);--color-cyan-400:oklch(78.9% .154 211.53);--color-cyan-500:oklch(71.5% .143 215.221);--color-cyan-600:oklch(60.9% .126 221.723);--color-cyan-700:oklch(52% .105 223.128);--color-cyan-800:oklch(45% .085 224.283);--color-cyan-900:oklch(39.8% .07 227.392);--color-cyan-950:oklch(30.2% .056 229.695);--color-sky-50:oklch(97.7% .013 236.62);--color-sky-100:oklch(95.1% .026 236.824);--color-sky-200:oklch(90.1% .058 230.902);--color-sky-300:oklch(82.8% .111 230.318);--color-sky-400:oklch(74.6% .16 232.661);--color-sky-500:oklch(68.5% .169 237.323);--color-sky-600:oklch(58.8% .158 241.966);--color-sky-700:oklch(50% .134 242.749);--color-sky-800:oklch(44.3% .11 240.79);--color-sky-900:oklch(39.1% .09 240.876);--color-sky-950:oklch(29.3% .066 243.157);--color-blue-50:oklch(97% .014 254.604);--color-blue-100:oklch(93.2% .032 255.585);--color-blue-200:oklch(88.2% .059 254.128);--color-blue-300:oklch(80.9% .105 251.813);--color-blue-400:oklch(70.7% .165 254.624);--color-blue-500:oklch(62.3% .214 259.815);--color-blue-600:oklch(54.6% .245 262.881);--color-blue-700:oklch(48.8% .243 264.376);--color-blue-800:oklch(42.4% .199 265.638);--color-blue-900:oklch(37.9% .146 265.522);--color-blue-950:oklch(28.2% .091 267.935);--color-indigo-50:oklch(96.2% .018 272.314);--color-indigo-100:oklch(93% .034 272.788);--color-indigo-200:oklch(87% .065 274.039);--color-indigo-300:oklch(78.5% .115 274.713);--color-indigo-400:oklch(67.3% .182 276.935);--color-indigo-500:oklch(58.5% .233 277.117);--color-indigo-600:oklch(51.1% .262 276.966);--color-indigo-700:oklch(45.7% .24 277.023);--color-indigo-800:oklch(39.8% .195 277.366);--color-indigo-900:oklch(35.9% .144 278.697);--color-indigo-950:oklch(25.7% .09 281.288);--color-violet-50:oklch(96.9% .016 293.756);--color-violet-100:oklch(94.3% .029 294.588);--color-violet-200:oklch(89.4% .057 293.283);--color-violet-300:oklch(81.1% .111 293.571);--color-violet-400:oklch(70.2% .183 293.541);--color-violet-500:oklch(60.6% .25 292.717);--color-violet-600:oklch(54.1% .281 293.009);--color-violet-700:oklch(49.1% .27 292.581);--color-violet-800:oklch(43.2% .232 292.759);--color-violet-900:oklch(38% .189 293.745);--color-violet-950:oklch(28.3% .141 291.089);--color-purple-50:oklch(97.7% .014 308.299);--color-purple-100:oklch(94.6% .033 307.174);--color-purple-200:oklch(90.2% .063 306.703);--color-purple-300:oklch(82.7% .119 306.383);--color-purple-400:oklch(71.4% .203 305.504);--color-purple-500:oklch(62.7% .265 303.9);--color-purple-600:oklch(55.8% .288 302.321);--color-purple-700:oklch(49.6% .265 301.924);--color-purple-800:oklch(43.8% .218 303.724);--color-purple-900:oklch(38.1% .176 304.987);--color-purple-950:oklch(29.1% .149 302.717);--color-fuchsia-50:oklch(97.7% .017 320.058);--color-fuchsia-100:oklch(95.2% .037 318.852);--color-fuchsia-200:oklch(90.3% .076 319.62);--color-fuchsia-300:oklch(83.3% .145 321.434);--color-fuchsia-400:oklch(74% .238 322.16);--color-fuchsia-500:oklch(66.7% .295 322.15);--color-fuchsia-600:oklch(59.1% .293 322.896);--color-fuchsia-700:oklch(51.8% .253 323.949);--color-fuchsia-800:oklch(45.2% .211 324.591);--color-fuchsia-900:oklch(40.1% .17 325.612);--color-fuchsia-950:oklch(29.3% .136 325.661);--color-pink-50:oklch(97.1% .014 343.198);--color-pink-100:oklch(94.8% .028 342.258);--color-pink-200:oklch(89.9% .061 343.231);--color-pink-300:oklch(82.3% .12 346.018);--color-pink-400:oklch(71.8% .202 349.761);--color-pink-500:oklch(65.6% .241 354.308);--color-pink-600:oklch(59.2% .249 .584);--color-pink-700:oklch(52.5% .223 3.958);--color-pink-800:oklch(45.9% .187 3.815);--color-pink-900:oklch(40.8% .153 2.432);--color-pink-950:oklch(28.4% .109 3.907);--color-rose-50:oklch(96.9% .015 12.422);--color-rose-100:oklch(94.1% .03 12.58);--color-rose-200:oklch(89.2% .058 10.001);--color-rose-300:oklch(81% .117 11.638);--color-rose-400:oklch(71.2% .194 13.428);--color-rose-500:oklch(64.5% .246 16.439);--color-rose-600:oklch(58.6% .253 17.585);--color-rose-700:oklch(51.4% .222 16.935);--color-rose-800:oklch(45.5% .188 13.697);--color-rose-900:oklch(41% .159 10.272);--color-rose-950:oklch(27.1% .105 12.094);--color-slate-50:oklch(98.4% .003 247.858);--color-slate-100:oklch(96.8% .007 247.896);--color-slate-200:oklch(92.9% .013 255.508);--color-slate-300:oklch(86.9% .022 252.894);--color-slate-400:oklch(70.4% .04 256.788);--color-slate-500:oklch(55.4% .046 257.417);--color-slate-600:oklch(44.6% .043 257.281);--color-slate-700:oklch(37.2% .044 257.287);--color-slate-800:oklch(27.9% .041 260.031);--color-slate-900:oklch(20.8% .042 265.755);--color-slate-950:oklch(12.9% .042 264.695);--color-gray-50:oklch(98.5% .002 247.839);--color-gray-100:oklch(96.7% .003 264.542);--color-gray-200:oklch(92.8% .006 264.531);--color-gray-300:oklch(87.2% .01 258.338);--color-gray-400:oklch(70.7% .022 261.325);--color-gray-500:oklch(55.1% .027 264.364);--color-gray-600:oklch(44.6% .03 256.802);--color-gray-700:oklch(37.3% .034 259.733);--color-gray-800:oklch(27.8% .033 256.848);--color-gray-900:oklch(21% .034 264.665);--color-gray-950:oklch(13% .028 261.692);--color-zinc-50:oklch(98.5% 0 0);--color-zinc-100:oklch(96.7% .001 286.375);--color-zinc-200:oklch(92% .004 286.32);--color-zinc-300:oklch(87.1% .006 286.286);--color-zinc-400:oklch(70.5% .015 286.067);--color-zinc-500:oklch(55.2% .016 285.938);--color-zinc-600:oklch(44.2% .017 285.786);--color-zinc-700:oklch(37% .013 285.805);--color-zinc-800:oklch(27.4% .006 286.033);--color-zinc-900:oklch(21% .006 285.885);--color-zinc-950:oklch(14.1% .005 285.823);--color-neutral-50:oklch(98.5% 0 0);--color-neutral-100:oklch(97% 0 0);--color-neutral-200:oklch(92.2% 0 0);--color-neutral-300:oklch(87% 0 0);--color-neutral-400:oklch(70.8% 0 0);--color-neutral-500:oklch(55.6% 0 0);--color-neutral-600:oklch(43.9% 0 0);--color-neutral-700:oklch(37.1% 0 0);--color-neutral-800:oklch(26.9% 0 0);--color-neutral-900:oklch(20.5% 0 0);--color-neutral-950:oklch(14.5% 0 0);--color-stone-50:oklch(98.5% .001 106.423);--color-stone-100:oklch(97% .001 106.424);--color-stone-200:oklch(92.3% .003 48.717);--color-stone-300:oklch(86.9% .005 56.366);--color-stone-400:oklch(70.9% .01 56.259);--color-stone-500:oklch(55.3% .013 58.071);--color-stone-600:oklch(44.4% .011 73.639);--color-stone-700:oklch(37.4% .01 67.558);--color-stone-800:oklch(26.8% .007 34.298);--color-stone-900:oklch(21.6% .006 56.043);--color-stone-950:oklch(14.7% .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--breakpoint-sm:40rem;--breakpoint-md:48rem;--breakpoint-lg:64rem;--breakpoint-xl:80rem;--breakpoint-2xl:96rem;--container-3xs:16rem;--container-2xs:18rem;--container-xs:20rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-xl:36rem;--container-2xl:42rem;--container-3xl:48rem;--container-4xl:56rem;--container-5xl:64rem;--container-6xl:72rem;--container-7xl:80rem;--text-xs:.75rem;--text-xs--line-height:calc(1 / .75);--text-sm:.875rem;--text-sm--line-height:calc(1.25 / .875);--text-base:1rem;--text-base--line-height: 1.5 ;--text-lg:1.125rem;--text-lg--line-height:calc(1.75 / 1.125);--text-xl:1.25rem;--text-xl--line-height:calc(1.75 / 1.25);--text-2xl:1.5rem;--text-2xl--line-height:calc(2 / 1.5);--text-3xl:1.875rem;--text-3xl--line-height: 1.2 ;--text-4xl:2.25rem;--text-4xl--line-height:calc(2.5 / 2.25);--text-5xl:3rem;--text-5xl--line-height:1;--text-6xl:3.75rem;--text-6xl--line-height:1;--text-7xl:4.5rem;--text-7xl--line-height:1;--text-8xl:6rem;--text-8xl--line-height:1;--text-9xl:8rem;--text-9xl--line-height:1;--font-weight-thin:100;--font-weight-extralight:200;--font-weight-light:300;--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--font-weight-bold:700;--font-weight-extrabold:800;--font-weight-black:900;--tracking-tighter:-.05em;--tracking-tight:-.025em;--tracking-normal:0em;--tracking-wide:.025em;--tracking-wider:.05em;--tracking-widest:.1em;--leading-tight:1.25;--leading-snug:1.375;--leading-normal:1.5;--leading-relaxed:1.625;--leading-loose:2;--radius-xs:.125rem;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--radius-2xl:1rem;--radius-3xl:1.5rem;--radius-4xl:2rem;--shadow-2xs:0 1px #0000000d;--shadow-xs:0 1px 2px 0 #0000000d;--shadow-sm:0 1px 3px 0 #0000001a, 0 1px 2px -1px #0000001a;--shadow-md:0 4px 6px -1px #0000001a, 0 2px 4px -2px #0000001a;--shadow-lg:0 10px 15px -3px #0000001a, 0 4px 6px -4px #0000001a;--shadow-xl:0 20px 25px -5px #0000001a, 0 8px 10px -6px #0000001a;--shadow-2xl:0 25px 50px -12px #00000040;--inset-shadow-2xs:inset 0 1px #0000000d;--inset-shadow-xs:inset 0 1px 1px #0000000d;--inset-shadow-sm:inset 0 2px 4px #0000000d;--drop-shadow-xs:0 1px 1px #0000000d;--drop-shadow-sm:0 1px 2px #00000026;--drop-shadow-md:0 3px 3px #0000001f;--drop-shadow-lg:0 4px 4px #00000026;--drop-shadow-xl:0 9px 7px #0000001a;--drop-shadow-2xl:0 25px 25px #00000026;--ease-in:cubic-bezier(.4, 0, 1, 1);--ease-out:cubic-bezier(0, 0, .2, 1);--ease-in-out:cubic-bezier(.4, 0, .2, 1);--animate-spin:spin 1s linear infinite;--animate-ping:ping 1s cubic-bezier(0, 0, .2, 1) infinite;--animate-pulse:pulse 2s cubic-bezier(.4, 0, .6, 1) infinite;--animate-bounce:bounce 1s infinite;--blur-xs:4px;--blur-sm:8px;--blur-md:12px;--blur-lg:16px;--blur-xl:24px;--blur-2xl:40px;--blur-3xl:64px;--perspective-dramatic:100px;--perspective-near:300px;--perspective-normal:500px;--perspective-midrange:800px;--perspective-distant:1200px;--aspect-video:16 / 9;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4, 0, .2, 1);--default-font-family:var(--font-sans);--default-mono-font-family:var(--font-mono)}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1}@supports (not ((-webkit-appearance:-apple-pay-button))) or (contain-intrinsic-size:1px){::placeholder{color:currentColor}@supports (color:color-mix(in lab,red,red)){::placeholder{color:color-mix(in oklab,currentcolor 50%,transparent)}}}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}::-webkit-calendar-picker-indicator{line-height:1}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){appearance:button}::file-selector-button{appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.absolute{position:absolute}.fixed{position:fixed}.relative{position:relative}.static{position:static}.inset-0{inset:calc(var(--spacing) * 0)}.start{inset-inline-start:var(--spacing)}.top-0{top:calc(var(--spacing) * 0)}.right-0{right:calc(var(--spacing) * 0)}.container{width:100%}@media(min-width:40rem){.container{max-width:40rem}}@media(min-width:48rem){.container{max-width:48rem}}@media(min-width:64rem){.container{max-width:64rem}}@media(min-width:80rem){.container{max-width:80rem}}@media(min-width:96rem){.container{max-width:96rem}}.mx-auto{margin-inline:auto}.-mt-\[6\.6rem\]{margin-top:-6.6rem}.-mt-px{margin-top:-1px}.mt-2{margin-top:calc(var(--spacing) * 2)}.mt-4{margin-top:calc(var(--spacing) * 4)}.mt-6{margin-top:calc(var(--spacing) * 6)}.mt-8{margin-top:calc(var(--spacing) * 8)}.mr-2{margin-right:calc(var(--spacing) * 2)}.-mb-px{margin-bottom:-1px}.mb-1{margin-bottom:calc(var(--spacing) * 1)}.mb-2{margin-bottom:calc(var(--spacing) * 2)}.mb-4{margin-bottom:calc(var(--spacing) * 4)}.mb-6{margin-bottom:calc(var(--spacing) * 6)}.-ml-8{margin-left:calc(var(--spacing) * -8)}.-ml-px{margin-left:-1px}.ml-1{margin-left:calc(var(--spacing) * 1)}.ml-2{margin-left:calc(var(--spacing) * 2)}.ml-4{margin-left:calc(var(--spacing) * 4)}.ml-12{margin-left:calc(var(--spacing) * 12)}.contents{display:contents}.flex{display:flex}.grid{display:grid}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.table{display:table}.aspect-\[335\/364\]{aspect-ratio:335/364}.h-1{height:calc(var(--spacing) * 1)}.h-1\.5{height:calc(var(--spacing) * 1.5)}.h-2{height:calc(var(--spacing) * 2)}.h-2\.5{height:calc(var(--spacing) * 2.5)}.h-3{height:calc(var(--spacing) * 3)}.h-3\.5{height:calc(var(--spacing) * 3.5)}.h-5{height:calc(var(--spacing) * 5)}.h-8{height:calc(var(--spacing) * 8)}.h-14{height:calc(var(--spacing) * 14)}.h-14\.5{height:calc(var(--spacing) * 14.5)}.h-16{height:calc(var(--spacing) * 16)}.min-h-screen{min-height:100vh}.w-1{width:calc(var(--spacing) * 1)}.w-1\.5{width:calc(var(--spacing) * 1.5)}.w-2{width:calc(var(--spacing) * 2)}.w-2\.5{width:calc(var(--spacing) * 2.5)}.w-3{width:calc(var(--spacing) * 3)}.w-3\.5{width:calc(var(--spacing) * 3.5)}.w-5{width:calc(var(--spacing) * 5)}.w-8{width:calc(var(--spacing) * 8)}.w-\[438px\]{width:438px}.w-auto{width:auto}.w-full{width:100%}.max-w-6xl{max-width:var(--container-6xl)}.max-w-\[335px\]{max-width:335px}.max-w-none{max-width:none}.max-w-xl{max-width:var(--container-xl)}.flex-1{flex:1}.shrink-0{flex-shrink:0}.translate-y-0{--tw-translate-y:calc(var(--spacing) * 0);translate:var(--tw-translate-x) var(--tw-translate-y)}.transform{transform:var(--tw-rotate-x,) var(--tw-rotate-y,) var(--tw-rotate-z,) var(--tw-skew-x,) var(--tw-skew-y,)}.cursor-default{cursor:default}.cursor-not-allowed{cursor:not-allowed}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.justify-between{justify-content:space-between}.justify-center{justify-content:center}.justify-end{justify-content:flex-end}.justify-items-center{justify-items:center}.gap-2{gap:calc(var(--spacing) * 2)}.gap-3{gap:calc(var(--spacing) * 3)}.gap-4{gap:calc(var(--spacing) * 4)}:where(.space-x-1>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing) * 1) * var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing) * 1) * calc(1 - var(--tw-space-x-reverse)))}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:3.40282e38px}.rounded-md{border-radius:var(--radius-md)}.rounded-sm{border-radius:var(--radius-sm)}.rounded-t-lg{border-top-left-radius:var(--radius-lg);border-top-right-radius:var(--radius-lg)}.rounded-l-md{border-top-left-radius:var(--radius-md);border-bottom-left-radius:var(--radius-md)}.rounded-r-md{border-top-right-radius:var(--radius-md);border-bottom-right-radius:var(--radius-md)}.rounded-br-lg{border-bottom-right-radius:var(--radius-lg)}.rounded-bl-lg{border-bottom-left-radius:var(--radius-lg)}.border{border-style:var(--tw-border-style);border-width:1px}.border-t{border-top-style:var(--tw-border-style);border-top-width:1px}.border-r{border-right-style:var(--tw-border-style);border-right-width:1px}.border-\[\#19140035\]{border-color:#19140035}.border-\[\#e3e3e0\]{border-color:#e3e3e0}.border-black{border-color:var(--color-black)}.border-gray-200{border-color:var(--color-gray-200)}.border-gray-300{border-color:var(--color-gray-300)}.border-gray-400{border-color:var(--color-gray-400)}.border-transparent{border-color:#0000}.bg-\[\#1b1b18\]{background-color:#1b1b18}.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.bg-\[\#dbdbd7\]{background-color:#dbdbd7}.bg-\[\#fff2f2\]{background-color:#fff2f2}.bg-gray-100{background-color:var(--color-gray-100)}.bg-gray-200{background-color:var(--color-gray-200)}.bg-white{background-color:var(--color-white)}.p-6{padding:calc(var(--spacing) * 6)}.px-2{padding-inline:calc(var(--spacing) * 2)}.px-4{padding-inline:calc(var(--spacing) * 4)}.px-5{padding-inline:calc(var(--spacing) * 5)}.px-6{padding-inline:calc(var(--spacing) * 6)}.py-1{padding-block:calc(var(--spacing) * 1)}.py-1\.5{padding-block:calc(var(--spacing) * 1.5)}.py-2{padding-block:calc(var(--spacing) * 2)}.py-4{padding-block:calc(var(--spacing) * 4)}.pt-8{padding-top:calc(var(--spacing) * 8)}.pb-6{padding-bottom:calc(var(--spacing) * 6)}.pb-12{padding-bottom:calc(var(--spacing) * 12)}.text-center{text-align:center}.text-lg{font-size:var(--text-lg);line-height:var(--tw-leading,var(--text-lg--line-height))}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-\[13px\]{font-size:13px}.leading-5{--tw-leading:calc(var(--spacing) * 5);line-height:calc(var(--spacing) * 5)}.leading-7{--tw-leading:calc(var(--spacing) * 7);line-height:calc(var(--spacing) * 7)}.leading-\[20px\]{--tw-leading:20px;line-height:20px}.leading-normal{--tw-leading:var(--leading-normal);line-height:var(--leading-normal)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.font-semibold{--tw-font-weight:var(--font-weight-semibold);font-weight:var(--font-weight-semibold)}.tracking-wider{--tw-tracking:var(--tracking-wider);letter-spacing:var(--tracking-wider)}.text-\[\#1B1B18\],.text-\[\#1b1b18\]{color:#1b1b18}.text-\[\#706f6c\]{color:#706f6c}.text-\[\#F3BEC7\]{color:#f3bec7}.text-\[\#F8B803\]{color:#f8b803}.text-\[\#F53003\],.text-\[\#f53003\]{color:#f53003}.text-gray-200{color:var(--color-gray-200)}.text-gray-300{color:var(--color-gray-300)}.text-gray-400{color:var(--color-gray-400)}.text-gray-500{color:var(--color-gray-500)}.text-gray-600{color:var(--color-gray-600)}.text-gray-700{color:var(--color-gray-700)}.text-gray-800{color:var(--color-gray-800)}.text-gray-900{color:var(--color-gray-900)}.text-white{color:var(--color-white)}.uppercase{text-transform:uppercase}.underline{text-decoration-line:underline}.underline-offset-4{text-underline-offset:4px}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.opacity-100{opacity:1}.mix-blend-color{mix-blend-mode:color}.mix-blend-darken{mix-blend-mode:darken}.mix-blend-hard-light{mix-blend-mode:hard-light}.mix-blend-multiply{mix-blend-mode:multiply}.shadow{--tw-shadow:0 1px 3px 0 var(--tw-shadow-color,#0000001a), 0 1px 2px -1px var(--tw-shadow-color,#0000001a);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow:0px 0px 1px 0px var(--tw-shadow-color,#00000008), 0px 1px 2px 0px var(--tw-shadow-color,#0000000f);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#1a1a0029);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-sm{--tw-shadow:0 1px 3px 0 var(--tw-shadow-color,#0000001a), 0 1px 2px -1px var(--tw-shadow-color,#0000001a);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.ring-gray-300{--tw-ring-color:var(--color-gray-300)}.filter{filter:var(--tw-blur,) var(--tw-brightness,) var(--tw-contrast,) var(--tw-grayscale,) var(--tw-hue-rotate,) var(--tw-invert,) var(--tw-saturate,) var(--tw-sepia,) var(--tw-drop-shadow,)}.transition{transition-property:color,background-color,border-color,outline-color,text-decoration-color,fill,stroke,--tw-gradient-from,--tw-gradient-via,--tw-gradient-to,opacity,box-shadow,transform,translate,scale,rotate,filter,-webkit-backdrop-filter,backdrop-filter,display,content-visibility,overlay,pointer-events;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-opacity{transition-property:opacity;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.delay-200{transition-delay:.2s}.delay-300{transition-delay:.3s}.delay-400{transition-delay:.4s}.duration-150{--tw-duration:.15s;transition-duration:.15s}.duration-750{--tw-duration:.75s;transition-duration:.75s}.ease-in-out{--tw-ease:var(--ease-in-out);transition-timing-function:var(--ease-in-out)}.\[--stroke-color\:\#1B1B18\]{--stroke-color:#1b1b18}.not-has-\[nav\]\:hidden:not(:has(:is(nav))){display:none}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:top-0:before{content:var(--tw-content);top:calc(var(--spacing) * 0)}.before\:top-1\/2:before{content:var(--tw-content);top:50%}.before\:bottom-0:before{content:var(--tw-content);bottom:calc(var(--spacing) * 0)}.before\:bottom-1\/2:before{content:var(--tw-content);bottom:50%}.before\:left-\[0\.4rem\]:before{content:var(--tw-content);left:.4rem}.before\:border-l:before{content:var(--tw-content);border-left-style:var(--tw-border-style);border-left-width:1px}.before\:border-\[\#e3e3e0\]:before{content:var(--tw-content);border-color:#e3e3e0}@media(hover:hover){.hover\:border-\[\#1915014a\]:hover{border-color:#1915014a}.hover\:border-\[\#19140035\]:hover{border-color:#19140035}.hover\:border-black:hover{border-color:var(--color-black)}.hover\:bg-black:hover{background-color:var(--color-black)}.hover\:bg-gray-100:hover{background-color:var(--color-gray-100)}.hover\:text-gray-400:hover{color:var(--color-gray-400)}.hover\:text-gray-700:hover{color:var(--color-gray-700)}}.focus\:border-blue-300:focus{border-color:var(--color-blue-300)}.focus\:ring:focus{--tw-ring-shadow:var(--tw-ring-inset,) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color,currentcolor);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.focus\:outline-none:focus{--tw-outline-style:none;outline-style:none}.active\:bg-gray-100:active{background-color:var(--color-gray-100)}.active\:text-gray-500:active{color:var(--color-gray-500)}.active\:text-gray-700:active{color:var(--color-gray-700)}.active\:text-gray-800:active{color:var(--color-gray-800)}@media(min-width:40rem){.sm\:flex{display:flex}.sm\:hidden{display:none}.sm\:flex-1{flex:1}.sm\:items-center{align-items:center}.sm\:justify-between{justify-content:space-between}.sm\:justify-start{justify-content:flex-start}.sm\:gap-2{gap:calc(var(--spacing) * 2)}.sm\:px-6{padding-inline:calc(var(--spacing) * 6)}.sm\:pt-0{padding-top:calc(var(--spacing) * 0)}}@media(min-width:64rem){.lg\:mt-10{margin-top:calc(var(--spacing) * 10)}.lg\:mb-0{margin-bottom:calc(var(--spacing) * 0)}.lg\:mb-6{margin-bottom:calc(var(--spacing) * 6)}.lg\:-ml-px{margin-left:-1px}.lg\:ml-0{margin-left:calc(var(--spacing) * 0)}.lg\:block{display:block}.lg\:aspect-auto{aspect-ratio:auto}.lg\:w-\[438px\]{width:438px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.lg\:grow{flex-grow:1}.lg\:flex-row{flex-direction:row}.lg\:justify-center{justify-content:center}.lg\:rounded-t-none{border-top-left-radius:0;border-top-right-radius:0}.lg\:rounded-tl-lg{border-top-left-radius:var(--radius-lg)}.lg\:rounded-r-lg{border-top-right-radius:var(--radius-lg);border-bottom-right-radius:var(--radius-lg)}.lg\:rounded-br-none{border-bottom-right-radius:0}.lg\:p-8{padding:calc(var(--spacing) * 8)}.lg\:p-20{padding:calc(var(--spacing) * 20)}.lg\:px-8{padding-inline:calc(var(--spacing) * 8)}.lg\:pb-10{padding-bottom:calc(var(--spacing) * 10)}}.rtl\:flex-row-reverse:where(:dir(rtl),[dir=rtl],[dir=rtl] *){flex-direction:row-reverse}@media(prefers-color-scheme:dark){.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:border-\[\#eeeeec\]{border-color:#eeeeec}.dark\:border-gray-600{border-color:var(--color-gray-600)}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:bg-\[\#3E3E3A\]{background-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:bg-\[\#eeeeec\]{background-color:#eeeeec}.dark\:bg-gray-700{background-color:var(--color-gray-700)}.dark\:bg-gray-800{background-color:var(--color-gray-800)}.dark\:bg-gray-900{background-color:var(--color-gray-900)}.dark\:text-\[\#1C1C1A\]{color:#1c1c1a}.dark\:text-\[\#4B0600\]{color:#4b0600}.dark\:text-\[\#391800\]{color:#391800}.dark\:text-\[\#733000\]{color:#733000}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#F61500\]{color:#f61500}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:text-black{color:var(--color-black)}.dark\:text-gray-200{color:var(--color-gray-200)}.dark\:text-gray-300{color:var(--color-gray-300)}.dark\:text-gray-400{color:var(--color-gray-400)}.dark\:text-gray-600{color:var(--color-gray-600)}.dark\:mix-blend-hard-light{mix-blend-mode:hard-light}.dark\:mix-blend-normal{mix-blend-mode:normal}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#fffaed2d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.dark\:\[--stroke-color\:\#FF750F\]{--stroke-color:#ff750f}.dark\:before\:border-\[\#3E3E3A\]:before{content:var(--tw-content);border-color:#3e3e3a}@media(hover:hover){.dark\:hover\:border-\[\#3E3E3A\]:hover{border-color:#3e3e3a}.dark\:hover\:border-\[\#62605b\]:hover{border-color:#62605b}.dark\:hover\:border-white:hover{border-color:var(--color-white)}.dark\:hover\:bg-gray-900:hover{background-color:var(--color-gray-900)}.dark\:hover\:bg-white:hover{background-color:var(--color-white)}.dark\:hover\:text-gray-200:hover{color:var(--color-gray-200)}.dark\:hover\:text-gray-300:hover{color:var(--color-gray-300)}}.dark\:focus\:border-blue-700:focus{border-color:var(--color-blue-700)}.dark\:focus\:border-blue-800:focus{border-color:var(--color-blue-800)}.dark\:active\:bg-gray-700:active{background-color:var(--color-gray-700)}.dark\:active\:text-gray-300:active{color:var(--color-gray-300)}}@starting-style{.starting\:opacity-0{opacity:0}}@media(prefers-reduced-motion:no-preference){@starting-style{.motion-safe\:starting\:-translate-x-\[26px\]{--tw-translate-x: -26px ;translate:var(--tw-translate-x) var(--tw-translate-y)}}@starting-style{.motion-safe\:starting\:-translate-x-\[51px\]{--tw-translate-x: -51px ;translate:var(--tw-translate-x) var(--tw-translate-y)}}@starting-style{.motion-safe\:starting\:-translate-x-\[78px\]{--tw-translate-x: -78px ;translate:var(--tw-translate-x) var(--tw-translate-y)}}@starting-style{.motion-safe\:starting\:-translate-x-\[102px\]{--tw-translate-x: -102px ;translate:var(--tw-translate-x) var(--tw-translate-y)}}@starting-style{.motion-safe\:starting\:translate-y-6{--tw-translate-y:calc(var(--spacing) * 6);translate:var(--tw-translate-x) var(--tw-translate-y)}}}}@property --tw-translate-x{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"*";inherits:false;initial-value:0}@property --tw-rotate-x{syntax:"*";inherits:false}@property --tw-rotate-y{syntax:"*";inherits:false}@property --tw-rotate-z{syntax:"*";inherits:false}@property --tw-skew-x{syntax:"*";inherits:false}@property --tw-skew-y{syntax:"*";inherits:false}@property --tw-space-x-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-leading{syntax:"*";inherits:false}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-tracking{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-shadow-alpha{syntax:"<percentage>";inherits:false;initial-value:100%}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow-alpha{syntax:"<percentage>";inherits:false;initial-value:100%}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-blur{syntax:"*";inherits:false}@property --tw-brightness{syntax:"*";inherits:false}@property --tw-contrast{syntax:"*";inherits:false}@property --tw-grayscale{syntax:"*";inherits:false}@property --tw-hue-rotate{syntax:"*";inherits:false}@property --tw-invert{syntax:"*";inherits:false}@property --tw-opacity{syntax:"*";inherits:false}@property --tw-saturate{syntax:"*";inherits:false}@property --tw-sepia{syntax:"*";inherits:false}@property --tw-drop-shadow{syntax:"*";inherits:false}@property --tw-drop-shadow-color{syntax:"*";inherits:false}@property --tw-drop-shadow-alpha{syntax:"<percentage>";inherits:false;initial-value:100%}@property --tw-drop-shadow-size{syntax:"*";inherits:false}@property --tw-duration{syntax:"*";inherits:false}@property --tw-ease{syntax:"*";inherits:false}@property --tw-content{syntax:"*";inherits:false;initial-value:""}@keyframes spin{to{transform:rotate(360deg)}}@keyframes ping{75%,to{opacity:0;transform:scale(2)}}@keyframes pulse{50%{opacity:.5}}@keyframes bounce{0%,to{animation-timing-function:cubic-bezier(.8,0,1,1);transform:translateY(-25%)}50%{animation-timing-function:cubic-bezier(0,0,.2,1);transform:none}}
            </style>
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    Variante 1 — Vos clients vous contactent plus facilement

    Le bénéfice est immédiat et l’aperçu rend concret ce que le visiteur recevra avant de remplir le formulaire.

    <section aria-labelledby="hero-titre-1" lang="fr" class="bg-white font-sans text-slate-900">
        <div class="mx-auto grid max-w-6xl items-start gap-7 px-4 py-6 sm:px-6 sm:py-10 lg:grid-cols-2 lg:gap-12 lg:py-12">
            <div class="min-w-0"><p class="text-sm font-semibold text-[#1732AB]">Carte de visite numérique · Gratuite</p><h1 id="hero-titre-1" class="mt-3 text-3xl font-semibold tracking-tight text-balance sm:text-4xl lg:text-[2.75rem] lg:leading-[1.1]">Vos clients vous contactent plus facilement</h1><p class="mt-4 text-base leading-7 text-slate-700">Votre carte de visite numérique gratuite : un lien à partager, vos coordonnées et vos réseaux sociaux. Son QR code permet d’ajouter vos coordonnées au carnet d’adresses du téléphone.</p><ul class="mt-4 flex flex-wrap gap-x-4 gap-y-2 text-sm text-slate-700">
                    <li><span aria-hidden="true">✓ </span>Gratuit, sans paiement</li>
                    <li><span aria-hidden="true">✓ </span>Sans compte</li>
                    <li><span aria-hidden="true">✓ </span>Publiée après validation</li>
                </ul><a href="#formulaire-carte-1" class="mt-5 inline-flex min-h-12 w-full items-center justify-center rounded-xl px-5 py-3 text-center font-semibold bg-[#1732AB] text-white hover:bg-[#102580] focus-visible:outline-[#1732AB] focus-visible:outline-2 focus-visible:outline-offset-4 sm:w-auto">Créer ma carte gratuite</a>
                <!-- Proposition de réassurance à valider. Ajouter ici le texte sur les données une fois approuvé. -->
                <p class="mt-2 text-sm text-slate-600">Aucune carte bancaire à fournir.</p><div class="mt-5 rounded-2xl bg-slate-100 p-4"><figure class="flex items-center gap-5"><svg viewBox="0 0 200 330" class="h-32 w-auto shrink-0 lg:h-52" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg">
                            <!-- Illustration uniquement : coordonnées fictives, QR non fonctionnel. -->
                            <rect x="2" y="2" width="196" height="326" rx="28" fill="#0f172a"/>
                            <rect x="9" y="9" width="182" height="312" rx="22" fill="white"/>
                            <rect x="69" y="15" width="62" height="8" rx="4" fill="#0f172a"/>
                            <rect x="77" y="38" width="46" height="46" rx="14" fill="#1732AB"/>
                            <path d="M89 69V52h7l4 8 4-8h7v17h-6V61l-5 8-5-8v8Z" fill="white"/>
                            <g font-family="system-ui, sans-serif" text-anchor="middle" fill="#0f172a">
                                <text x="100" y="104" font-size="14" font-weight="700">Atelier Martin</text>
                                <text x="100" y="122" font-size="10">Artisan · Namur</text>
                                <text x="100" y="145" font-size="10">+32 000 00 00 00</text>
                                <text x="100" y="162" font-size="10">contact@example.com</text>
                                <rect x="20" y="176" width="76" height="26" rx="7" fill="#eef2ff"/>
                                <rect x="104" y="176" width="76" height="26" rx="7" fill="#eef2ff"/>
                                <text x="58" y="193" font-size="9" fill="#1732AB">Instagram</text>
                                <text x="142" y="193" font-size="9" fill="#1732AB">Facebook</text>
                            </g>
                            <g transform="translate(72 215)" fill="#0f172a">
                                <path fill-rule="evenodd" d="M0 0h21v21H0ZM4 4v13h13V4ZM35 0h21v21H35ZM39 4v13h13V4ZM0 35h21v21H0ZM4 39v13h13V39Z"/>
                                <path d="M7 7h7v7H7ZM42 7h7v7h-7ZM7 42h7v7H7ZM25 0h5v10h-5ZM25 15h5v15h-5ZM0 25h10v5H0ZM15 25h5v5h-5ZM35 25h10v5H35ZM50 25h6v10h-6ZM25 35h10v5H25ZM40 35h5v10h-5ZM25 45h5v11h-5ZM35 50h10v6H35ZM50 40h6v16h-6Z"/>
                            </g>
                            <text x="100" y="296" text-anchor="middle" font-family="system-ui, sans-serif" font-size="10" fill="#1732AB">Ajouter à mes contacts</text>
                        </svg><figcaption class="text-sm leading-6 text-slate-600">Votre logo, votre couleur,<br>vos coordonnées.<br><span class="font-semibold">Exemple de carte</span></figcaption></figure></div></div>
            <div id="formulaire-carte-1" tabindex="-1" aria-labelledby="formulaire-titre-1" class="min-w-0 scroll-mt-6 rounded-2xl border border-slate-300 bg-white p-5 text-slate-900 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-[#1732AB] sm:p-8">
                <h2 id="formulaire-titre-1" class="text-xl font-semibold">Les informations de votre carte</h2>
                <p class="mt-2 text-sm leading-6 text-slate-600">Renseignez votre entreprise, vos coordonnées et vos réseaux sociaux. Ajoutez votre logo et choisissez votre couleur.</p>
                <!-- Intégrer ici votre formulaire existant. Ce conteneur est la cible du bouton. -->
                <!-- Retirer ce repère visuel lors de l’intégration. -->
                <div class="mt-5 rounded-xl border border-dashed border-slate-300 p-6 text-center text-sm text-slate-600">Emplacement du formulaire</div>
                <p class="mt-4 text-sm leading-6 text-slate-600">Après validation manuelle, vous recevez le lien de votre carte et son QR code.</p>
            </div>
        </div>
    </section>

    Variante 2 — Partagez vos coordonnées avec un seul lien

    Le lien unique simplifie la promesse ; le téléphone placé à côté du texte montre le résultat sans repousser le formulaire.

    <section aria-labelledby="hero-titre-2" lang="fr" class="bg-white font-sans text-slate-900">
        <div class="mx-auto grid max-w-6xl items-start gap-7 px-4 py-6 sm:px-6 sm:py-10 lg:grid-cols-2 lg:gap-12 lg:py-12">
            <div class="min-w-0"><p class="text-sm font-semibold text-[#1732AB]">Carte de visite numérique · Gratuite</p><h1 id="hero-titre-2" class="mt-3 text-3xl font-semibold tracking-tight text-balance sm:text-4xl lg:text-[2.75rem] lg:leading-[1.1]">Partagez vos coordonnées avec un seul lien</h1><div class="mt-4 grid grid-cols-[minmax(0,1fr)_auto] items-center gap-4"><div><p class="mt-4 text-base leading-7 text-slate-700">Une carte de visite numérique gratuite avec vos coordonnées, vos réseaux sociaux et un lien à partager. Un QR code permet de vous ajouter au carnet d’adresses du téléphone.</p></div><figure><svg viewBox="0 0 200 330" class="h-32 w-auto shrink-0 lg:h-52" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg">
                            <!-- Illustration uniquement : coordonnées fictives, QR non fonctionnel. -->
                            <rect x="2" y="2" width="196" height="326" rx="28" fill="#0f172a"/>
                            <rect x="9" y="9" width="182" height="312" rx="22" fill="white"/>
                            <rect x="69" y="15" width="62" height="8" rx="4" fill="#0f172a"/>
                            <rect x="77" y="38" width="46" height="46" rx="14" fill="#1732AB"/>
                            <path d="M89 69V52h7l4 8 4-8h7v17h-6V61l-5 8-5-8v8Z" fill="white"/>
                            <g font-family="system-ui, sans-serif" text-anchor="middle" fill="#0f172a">
                                <text x="100" y="104" font-size="14" font-weight="700">Atelier Martin</text>
                                <text x="100" y="122" font-size="10">Artisan · Namur</text>
                                <text x="100" y="145" font-size="10">+32 000 00 00 00</text>
                                <text x="100" y="162" font-size="10">contact@example.com</text>
                                <rect x="20" y="176" width="76" height="26" rx="7" fill="#eef2ff"/>
                                <rect x="104" y="176" width="76" height="26" rx="7" fill="#eef2ff"/>
                                <text x="58" y="193" font-size="9" fill="#1732AB">Instagram</text>
                                <text x="142" y="193" font-size="9" fill="#1732AB">Facebook</text>
                            </g>
                            <g transform="translate(72 215)" fill="#0f172a">
                                <path fill-rule="evenodd" d="M0 0h21v21H0ZM4 4v13h13V4ZM35 0h21v21H35ZM39 4v13h13V4ZM0 35h21v21H0ZM4 39v13h13V39Z"/>
                                <path d="M7 7h7v7H7ZM42 7h7v7h-7ZM7 42h7v7H7ZM25 0h5v10h-5ZM25 15h5v15h-5ZM0 25h10v5H0ZM15 25h5v5h-5ZM35 25h10v5H35ZM50 25h6v10h-6ZM25 35h10v5H25ZM40 35h5v10h-5ZM25 45h5v11h-5ZM35 50h10v6H35ZM50 40h6v16h-6Z"/>
                            </g>
                            <text x="100" y="296" text-anchor="middle" font-family="system-ui, sans-serif" font-size="10" fill="#1732AB">Ajouter à mes contacts</text>
                        </svg><figcaption class="mt-1 text-center text-xs text-slate-600">Exemple de carte</figcaption></figure></div><ul class="mt-4 flex flex-wrap gap-x-4 gap-y-2 text-sm text-slate-700">
                    <li><span aria-hidden="true">✓ </span>Gratuit, sans paiement</li>
                    <li><span aria-hidden="true">✓ </span>Sans compte</li>
                    <li><span aria-hidden="true">✓ </span>Publiée après validation</li>
                </ul><a href="#formulaire-carte-2" class="mt-5 inline-flex min-h-12 w-full items-center justify-center rounded-xl px-5 py-3 text-center font-semibold bg-[#1732AB] text-white hover:bg-[#102580] focus-visible:outline-[#1732AB] focus-visible:outline-2 focus-visible:outline-offset-4 sm:w-auto">Créer ma carte gratuite</a>
                <!-- Proposition de réassurance à valider. Ajouter ici le texte sur les données une fois approuvé. -->
                <p class="mt-2 text-sm text-slate-600">Aucune carte bancaire à fournir.</p></div>
            <div id="formulaire-carte-2" tabindex="-1" aria-labelledby="formulaire-titre-2" class="min-w-0 scroll-mt-6 rounded-2xl border border-slate-300 bg-white p-5 text-slate-900 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-[#1732AB] sm:p-8">
                <h2 id="formulaire-titre-2" class="text-xl font-semibold">Les informations de votre carte</h2>
                <p class="mt-2 text-sm leading-6 text-slate-600">Renseignez votre entreprise, vos coordonnées et vos réseaux sociaux. Ajoutez votre logo et choisissez votre couleur.</p>
                <!-- Intégrer ici votre formulaire existant. Ce conteneur est la cible du bouton. -->
                <!-- Retirer ce repère visuel lors de l’intégration. -->
                <div class="mt-5 rounded-xl border border-dashed border-slate-300 p-6 text-center text-sm text-slate-600">Emplacement du formulaire</div>
                <p class="mt-4 text-sm leading-6 text-slate-600">Après validation manuelle, vous recevez le lien de votre carte et son QR code.</p>
            </div>
        </div>
    </section>

    Variante 3 — Gardez votre place dans les contacts de vos clients

    L’accroche met en avant l’usage après la rencontre, tandis que le panneau bleu distingue nettement la promesse du formulaire.

    <section aria-labelledby="hero-titre-3" lang="fr" class="bg-slate-50 font-sans text-slate-900">
        <div class="mx-auto grid max-w-6xl items-start gap-7 px-4 py-6 sm:px-6 sm:py-10 lg:grid-cols-2 lg:gap-12 lg:py-12">
            <div class="min-w-0 rounded-2xl bg-[#1732AB] p-5 text-white sm:p-8"><p class="text-sm font-semibold text-white">Carte de visite numérique · Gratuite</p><h1 id="hero-titre-3" class="mt-3 text-3xl font-semibold tracking-tight text-balance sm:text-4xl lg:text-[2.75rem] lg:leading-[1.1]">Gardez votre place dans les contacts de vos clients</h1><p class="mt-4 text-base leading-7 text-white">Votre carte de visite numérique gratuite réunit vos coordonnées et vos réseaux sociaux sur un lien à partager. Avec le QR code, vos clients peuvent vous ajouter au carnet d’adresses de leur téléphone.</p><ul class="mt-4 flex flex-wrap gap-x-4 gap-y-2 text-sm text-white">
                    <li><span aria-hidden="true">✓ </span>Gratuit, sans paiement</li>
                    <li><span aria-hidden="true">✓ </span>Sans compte</li>
                    <li><span aria-hidden="true">✓ </span>Publiée après validation</li>
                </ul><a href="#formulaire-carte-3" class="mt-5 inline-flex min-h-12 w-full items-center justify-center rounded-xl px-5 py-3 text-center font-semibold bg-white text-[#1732AB] hover:bg-slate-100 focus-visible:outline-white focus-visible:outline-2 focus-visible:outline-offset-4 sm:w-auto">Créer ma carte gratuite</a>
                <!-- Proposition de réassurance à valider. Ajouter ici le texte sur les données une fois approuvé. -->
                <p class="mt-2 text-sm text-white">Aucune carte bancaire à fournir.</p><div class="mt-5 border-t border-white/40 pt-4"><figure class="flex items-center gap-5"><svg viewBox="0 0 200 330" class="h-32 w-auto shrink-0 lg:h-52" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg">
                            <!-- Illustration uniquement : coordonnées fictives, QR non fonctionnel. -->
                            <rect x="2" y="2" width="196" height="326" rx="28" fill="#0f172a"/>
                            <rect x="9" y="9" width="182" height="312" rx="22" fill="white"/>
                            <rect x="69" y="15" width="62" height="8" rx="4" fill="#0f172a"/>
                            <rect x="77" y="38" width="46" height="46" rx="14" fill="#1732AB"/>
                            <path d="M89 69V52h7l4 8 4-8h7v17h-6V61l-5 8-5-8v8Z" fill="white"/>
                            <g font-family="system-ui, sans-serif" text-anchor="middle" fill="#0f172a">
                                <text x="100" y="104" font-size="14" font-weight="700">Atelier Martin</text>
                                <text x="100" y="122" font-size="10">Artisan · Namur</text>
                                <text x="100" y="145" font-size="10">+32 000 00 00 00</text>
                                <text x="100" y="162" font-size="10">contact@example.com</text>
                                <rect x="20" y="176" width="76" height="26" rx="7" fill="#eef2ff"/>
                                <rect x="104" y="176" width="76" height="26" rx="7" fill="#eef2ff"/>
                                <text x="58" y="193" font-size="9" fill="#1732AB">Instagram</text>
                                <text x="142" y="193" font-size="9" fill="#1732AB">Facebook</text>
                            </g>
                            <g transform="translate(72 215)" fill="#0f172a">
                                <path fill-rule="evenodd" d="M0 0h21v21H0ZM4 4v13h13V4ZM35 0h21v21H35ZM39 4v13h13V4ZM0 35h21v21H0ZM4 39v13h13V39Z"/>
                                <path d="M7 7h7v7H7ZM42 7h7v7h-7ZM7 42h7v7H7ZM25 0h5v10h-5ZM25 15h5v15h-5ZM0 25h10v5H0ZM15 25h5v5h-5ZM35 25h10v5H35ZM50 25h6v10h-6ZM25 35h10v5H25ZM40 35h5v10h-5ZM25 45h5v11h-5ZM35 50h10v6H35ZM50 40h6v16h-6Z"/>
                            </g>
                            <text x="100" y="296" text-anchor="middle" font-family="system-ui, sans-serif" font-size="10" fill="#1732AB">Ajouter à mes contacts</text>
                        </svg><figcaption class="text-sm leading-6 text-white">Votre logo, votre couleur,<br>vos coordonnées.<br><span class="font-semibold">Exemple de carte</span></figcaption></figure></div></div>
            <div id="formulaire-carte-3" tabindex="-1" aria-labelledby="formulaire-titre-3" class="min-w-0 scroll-mt-6 rounded-2xl border border-slate-300 bg-white p-5 text-slate-900 focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-[#1732AB] sm:p-8">
                <h2 id="formulaire-titre-3" class="text-xl font-semibold">Les informations de votre carte</h2>
                <p class="mt-2 text-sm leading-6 text-slate-600">Renseignez votre entreprise, vos coordonnées et vos réseaux sociaux. Ajoutez votre logo et choisissez votre couleur.</p>
                <!-- Intégrer ici votre formulaire existant. Ce conteneur est la cible du bouton. -->
                <!-- Retirer ce repère visuel lors de l’intégration. -->
                <div class="mt-5 rounded-xl border border-dashed border-slate-300 p-6 text-center text-sm text-slate-600">Emplacement du formulaire</div>
                <p class="mt-4 text-sm leading-6 text-slate-600">Après validation manuelle, vous recevez le lien de votre carte et son QR code.</p>
            </div>
        </div>
    </section>
    <section class="bg-slate-50 py-8 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="flex flex-col lg:flex-row lg:items-center lg:gap-12">

                <!-- Colonne de gauche : Promesse -->
                <div class="w-full lg:w-7/12 flex flex-col gap-6 lg:pr-8">
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl">
                        Votre carte de visite numérique, gratuite et toujours disponible.
                    </h1>

                    <p class="text-lg text-slate-600">
                        Partagez vos coordonnées d'un simple scan. Inclus : votre lien web personnalisé, un QR code dédié et l'ajout direct au répertoire téléphonique de vos prospects.
                    </p>

                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-6">
                        <ul class="flex flex-col gap-3 text-slate-700">
                            <li class="flex items-center gap-2">
                                <svg class="h-5 w-5 text-[#1732AB] shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                                <span>100 % gratuit</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-5 w-5 text-[#1732AB] shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                                <span>Sans création de compte</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-5 w-5 text-[#1732AB] shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
                                <span>Publiée après validation manuelle</span>
                            </li>
                        </ul>

                        <!-- Visuel : Maquette Téléphone (Intégrée à côté des puces sur grand écran) -->
                        <div aria-hidden="true" class="relative w-36 h-64 rounded-[1.5rem] border-[4px] border-slate-900 bg-white shadow-lg overflow-hidden shrink-0 mt-4 sm:mt-0 mx-auto sm:mx-0">
                            <div class="absolute top-0 inset-x-0 h-3 bg-slate-900 rounded-b-lg w-16 mx-auto"></div>
                            <div class="pt-6 pb-4 px-3 flex flex-col items-center">
                                <div class="w-10 h-10 rounded-full bg-[#1732AB] flex items-center justify-center mb-2">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div class="w-3/4 h-2 bg-slate-200 rounded-full mb-1"></div>
                                <div class="w-1/2 h-1.5 bg-slate-200 rounded-full mb-3"></div>
                                <div class="w-16 h-16 bg-white border border-slate-200 rounded p-1 mb-3 flex flex-col justify-between">
                                    <div class="flex justify-between"><div class="w-3 h-3 bg-slate-800"></div><div class="w-3 h-3 bg-slate-800"></div></div>
                                    <div class="w-full flex justify-center"><div class="w-8 h-2 bg-slate-800"></div></div>
                                    <div class="flex justify-between"><div class="w-3 h-3 bg-slate-800"></div><div class="w-3 h-3 bg-slate-800"></div></div>
                                </div>
                                <div class="w-full h-6 rounded bg-[#1732AB] mb-2"></div>
                                <div class="flex gap-1.5"><div class="w-4 h-4 rounded-full bg-slate-200"></div><div class="w-4 h-4 rounded-full bg-slate-200"></div></div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 flex flex-col items-start gap-2">
                        <a href="#formulaire" class="inline-flex items-center justify-center rounded-md bg-[#1732AB] px-8 py-3.5 text-base font-semibold text-white shadow-sm hover:bg-[#11247a] focus:outline-none focus:ring-2 focus:ring-[#1732AB] focus:ring-offset-2 w-full sm:w-auto">
                            Créer ma carte gratuite
                        </a>
                        <p class="text-xs text-slate-500 font-medium ml-1">Vos données ne sont jamais revendues ou partagées.</p>
                    </div>
                </div>

                <!-- Colonne de droite : Emplacement Formulaire -->
                <div id="formulaire" class="w-full lg:w-5/12 mt-10 lg:mt-0 relative">
                    <div class="bg-white rounded-xl shadow-md border border-slate-100 p-8 flex flex-col items-center justify-center min-h-[450px]">
                        <!-- Le formulaire viendra ici -->
                        <p class="text-slate-400 font-medium text-center">[ Espace réservé au formulaire ]</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="bg-white py-8 px-4 sm:px-6 lg:py-16 lg:px-8 border-b border-slate-100">
        <div class="mx-auto max-w-7xl">
            <div class="flex flex-col lg:flex-row lg:gap-16">

                <!-- Colonne de gauche : Promesse et visuel superposés -->
                <div class="w-full lg:w-1/2 flex flex-col">
                    <h1 class="text-3xl font-extrabold text-slate-900 sm:text-4xl leading-tight">
                        Ne perdez plus aucun contact grâce à votre carte digitale.
                    </h1>
                    <p class="mt-4 text-lg text-slate-600">
                        Un mini-site pour votre activité professionnelle. Vos clients scannent votre QR code, consultent votre page et enregistrent vos infos instantanément.
                    </p>

                    <!-- Preuves et Visuel en grille -->
                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-6 items-center">
                        <ul class="flex flex-col gap-4 text-sm font-medium text-slate-700">
                            <li class="flex items-start gap-3">
              <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#1732AB]/10 text-[#1732AB] p-1">
                <svg fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
              </span>
                                Création 100 % gratuite
                            </li>
                            <li class="flex items-start gap-3">
              <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#1732AB]/10 text-[#1732AB] p-1">
                <svg fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
              </span>
                                Sans compte ni mot de passe
                            </li>
                            <li class="flex items-start gap-3">
              <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#1732AB]/10 text-[#1732AB] p-1">
                <svg fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>
              </span>
                                Mise en ligne après notre validation
                            </li>
                        </ul>

                        <!-- Visuel : Maquette inclinée stylisée -->
                        <div aria-hidden="true" class="mx-auto w-40 h-72 rounded-[2rem] border-[5px] border-slate-800 bg-slate-50 shadow-xl overflow-hidden relative rotate-2">
                            <div class="absolute top-0 inset-x-0 h-4 bg-slate-800 rounded-b-xl w-16 mx-auto"></div>
                            <div class="pt-8 px-4 flex flex-col items-center">
                                <!-- Profil -->
                                <div class="w-12 h-12 rounded-full bg-[#1732AB] mb-3"></div>
                                <div class="w-20 h-2 bg-slate-200 rounded mb-4"></div>
                                <!-- QR Code -->
                                <div class="w-20 h-20 bg-white border border-slate-300 shadow-sm p-1.5 mb-4 grid grid-cols-2 gap-1">
                                    <div class="bg-slate-900 rounded-sm"></div><div class="bg-slate-900 rounded-sm"></div>
                                    <div class="bg-slate-900 rounded-sm"></div><div class="bg-slate-900 rounded-sm"></div>
                                </div>
                                <div class="w-full h-8 rounded-lg bg-[#1732AB] mt-2"></div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 flex flex-col items-center sm:items-start text-center sm:text-left mb-6 lg:mb-0">
                        <a href="#formulaire" class="w-full sm:w-auto inline-block rounded-md bg-[#1732AB] px-8 py-3.5 text-base font-bold text-white shadow hover:bg-[#11247a] focus:outline-none focus:ring-2 focus:ring-[#1732AB] focus:ring-offset-2">
                            Créer ma carte gratuite
                        </a>
                        <span class="mt-2 text-xs text-slate-500">Service sans abonnement. Vos données restent privées.</span>
                    </div>
                </div>

                <!-- Colonne de droite : Formulaire -->
                <div id="formulaire" class="w-full lg:w-1/2">
                    <div class="bg-slate-50 rounded-2xl p-6 sm:p-10 flex flex-col items-center justify-center min-h-[500px] border border-slate-200">
                        <p class="text-slate-400 font-medium">[ Espace réservé au formulaire ]</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="bg-[#f8fafc] py-10 px-4 sm:px-6 lg:py-20 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="flex flex-col lg:flex-row-reverse lg:items-center lg:gap-12">

                <!-- Colonne de droite (en HTML) : Formulaire (Affiché à droite sur bureau, en bas sur mobile) -->
                <div id="formulaire" class="w-full lg:w-5/12 mb-10 lg:mb-0">
                    <div class="bg-white rounded-xl shadow-lg border border-slate-100 p-8 flex flex-col items-center justify-center min-h-[480px]">
                        <p class="text-slate-400 font-medium">[ Espace réservé au formulaire ]</p>
                    </div>
                </div>

                <!-- Colonne de gauche (en HTML) : Contenu -->
                <div class="w-full lg:w-7/12">
        <span class="inline-block px-3 py-1 mb-4 text-xs font-semibold tracking-wider text-[#1732AB] uppercase bg-[#1732AB]/10 rounded-full">
          Service pour indépendants
        </span>
                    <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-5">
                        Démarquez-vous avec une carte de visite digitale entièrement offerte.
                    </h1>
                    <p class="text-lg text-slate-600 mb-8 max-w-2xl">
                        Remplacez la carte papier. Générez un lien de contact unique, un QR code prêt à flasher, et laissez vos futurs clients enregistrer vos coordonnées directement dans leur smartphone.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-8 items-start mb-8">
                        <!-- Visuel : Minimaliste -->
                        <div aria-hidden="true" class="w-32 h-56 bg-slate-900 rounded-2xl shadow-xl flex flex-col p-1.5 shrink-0">
                            <div class="w-full h-full bg-white rounded-xl p-2 flex flex-col items-center">
                                <div class="w-8 h-8 rounded-full bg-[#1732AB] mt-2 mb-2"></div>
                                <div class="w-16 h-1 bg-slate-200 mb-4"></div>
                                <div class="w-16 h-16 bg-slate-100 border border-slate-300 flex items-center justify-center mb-3">
                                    <div class="w-10 h-10 bg-slate-800"></div>
                                </div>
                                <div class="w-full h-4 bg-[#1732AB] rounded-sm mt-auto mb-1"></div>
                            </div>
                        </div>

                        <ul class="flex flex-col gap-4 text-slate-700 font-medium">
                            <li class="flex items-center gap-3">
                                <div class="h-2 w-2 rounded-full bg-[#1732AB]"></div>
                                Totalement gratuit, sans frais d'installation
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="h-2 w-2 rounded-full bg-[#1732AB]"></div>
                                Utilisation immédiate, aucun compte nécessaire
                            </li>
                            <li class="flex items-center gap-3">
                                <div class="h-2 w-2 rounded-full bg-[#1732AB]"></div>
                                Page vérifiée et validée manuellement par nos soins
                            </li>
                        </ul>
                    </div>

                    <div>
                        <a href="#formulaire" class="inline-flex w-full sm:w-auto items-center justify-center rounded-lg bg-[#1732AB] px-8 py-4 text-base font-bold text-white shadow-md hover:bg-[#11247a] focus:outline-none focus:ring-4 focus:ring-[#1732AB]/20 transition-all">
                            Créer ma carte gratuite
                        </a>
                        <p class="mt-3 text-sm text-slate-500 font-medium text-center sm:text-left">
                            🔒 Vos informations de contact sont traitées en toute sécurité.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════════════════
     Hero, variante 1 : « le scan »
     Tailwind CSS 4. Aucune dépendance externe, aucun JavaScript.
     La couleur principale est une variable CSS locale : un seul endroit à changer.
     ═══════════════════════════════════════════════════════════════════════ --}}

    <section
        class="relative bg-white"
        style="--brand:#1732AB; --brand-dark:#122885; --brand-soft:#EEF1FB;"
        aria-labelledby="hero-titre"
    >
        <div class="mx-auto max-w-6xl px-5 py-10 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
            <div class="grid items-center gap-10 lg:grid-cols-[minmax(0,1fr)_330px] lg:gap-10 xl:grid-cols-[minmax(0,1fr)_390px] xl:gap-12">

                {{-- ───────── Colonne promesse ───────── --}}
                <div class="lg:grid lg:grid-cols-[minmax(0,1fr)_170px] lg:items-center lg:gap-6 xl:grid-cols-[minmax(0,1fr)_200px] xl:gap-8">

                    <div class="max-w-xl">
                        {{-- Le bandeau est masqué sous 640 px pour garder le hero court sur mobile --}}
                        <p class="hidden items-center gap-2 rounded-full bg-[var(--brand-soft)] px-3 py-1 text-sm font-medium text-[var(--brand)] sm:inline-flex">
                            <span class="h-1.5 w-1.5 rounded-full bg-[var(--brand)]" aria-hidden="true"></span>
                            Gratuit pour les indépendants et les PME
                        </p>

                        <h1 id="hero-titre" class="text-[1.75rem] sm:mt-4 font-bold leading-[1.15] tracking-tight text-slate-900 sm:text-4xl lg:text-[2.1rem] xl:text-[2.6rem]">
                            Un scan, et vos coordonnées sont dans leur téléphone
                        </h1>

                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">
                            Une page à votre nom, avec un QR code à faire scanner, un bouton qui ajoute vos
                            coordonnées au carnet d'adresses, et un lien à partager.
                        </p>

                        <ul class="mt-5 flex flex-wrap gap-x-5 gap-y-2 text-sm text-slate-700 sm:text-base">
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-[var(--brand)]" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M16.7 5.3a1 1 0 0 1 0 1.4l-7.5 7.5a1 1 0 0 1-1.4 0L3.3 9.7a1 1 0 1 1 1.4-1.4l3.8 3.8 6.8-6.8a1 1 0 0 1 1.4 0z"/></svg>
                                Gratuit, sans abonnement
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-[var(--brand)]" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M16.7 5.3a1 1 0 0 1 0 1.4l-7.5 7.5a1 1 0 0 1-1.4 0L3.3 9.7a1 1 0 1 1 1.4-1.4l3.8 3.8 6.8-6.8a1 1 0 0 1 1.4 0z"/></svg>
                                Sans compte ni mot de passe
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-[var(--brand)]" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M16.7 5.3a1 1 0 0 1 0 1.4l-7.5 7.5a1 1 0 0 1-1.4 0L3.3 9.7a1 1 0 1 1 1.4-1.4l3.8 3.8 6.8-6.8a1 1 0 0 1 1.4 0z"/></svg>
                                En ligne après ma validation
                            </li>
                        </ul>

                        <div class="mt-6 sm:mt-7">
                            <a
                                href="#formulaire"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-[var(--brand)] px-6 py-3.5 text-base font-semibold text-white transition-colors hover:bg-[var(--brand-dark)] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[var(--brand)] sm:w-auto"
                            >
                                Créer ma carte gratuite
                                <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M10.6 3.3a1 1 0 0 0-1.4 1.4l3.9 3.9H3a1 1 0 1 0 0 2h10.1l-3.9 3.9a1 1 0 1 0 1.4 1.4l5.6-5.6a1 1 0 0 0 0-1.4z"/></svg>
                            </a>

                            {{-- ▼ PHRASE DE RÉASSURANCE : à remplacer par votre formulation validée --}}
                            <p class="mt-3 text-sm text-slate-500">
                                Vos informations servent uniquement à créer votre carte.
                            </p>
                        </div>
                    </div>

                    {{-- Aperçu --}}
                    <div class="mt-6 flex justify-center lg:mt-0 lg:justify-end">
                        <svg viewBox="0 0 260 520" class="h-auto w-[130px] drop-shadow-xl sm:w-[180px] lg:w-[200px]" role="img" aria-labelledby="apercu-titre">
                            <title id="apercu-titre">Aperçu d'une carte de visite numérique sur un téléphone : logo, nom, coordonnées, boutons de réseaux sociaux, QR code et bouton d'ajout aux contacts.</title>
                            <rect x="0" y="0" width="260" height="520" rx="34" fill="#0F172A"/>
                            <rect x="8" y="8" width="244" height="504" rx="28" fill="#FFFFFF"/>
                            <rect x="8" y="8" width="244" height="120" rx="28" fill="var(--brand)"/>
                            <rect x="8" y="100" width="244" height="28" fill="var(--brand)"/>
                            <rect x="98" y="16" width="64" height="9" rx="4.5" fill="#0F172A" opacity=".45"/>
                            <circle cx="130" cy="116" r="31" fill="#FFFFFF"/>
                            <circle cx="130" cy="116" r="31" fill="none" stroke="#E2E8F0" stroke-width="1.5"/>
                            <text x="130" y="124" text-anchor="middle" font-family="system-ui, sans-serif" font-size="22" font-weight="700" fill="var(--brand)">JD</text>
                            <text x="130" y="176" text-anchor="middle" font-family="system-ui, sans-serif" font-size="17" font-weight="700" fill="#0F172A">Julie Dupont</text>
                            <text x="130" y="195" text-anchor="middle" font-family="system-ui, sans-serif" font-size="11" fill="#64748B">Dupont &amp; Fille, toiture</text>
                            <rect x="34" y="216" width="22" height="22" rx="7" fill="var(--brand-soft)"/>
                            <path d="M41 222.5c0-.8.7-1.5 1.5-1.5h1.6c.6 0 1.2.4 1.4 1l.5 1.6c.2.5 0 1.1-.4 1.4l-.8.6c.6 1.3 1.6 2.3 2.9 2.9l.6-.8c.3-.4.9-.6 1.4-.4l1.6.5c.6.2 1 .8 1 1.4v1.6c0 .8-.7 1.5-1.5 1.5-5.4 0-9.8-4.4-9.8-9.8z" fill="var(--brand)"/>
                            <text x="64" y="232" font-family="system-ui, sans-serif" font-size="12" fill="#334155">+32 478 12 34 56</text>
                            <rect x="34" y="248" width="22" height="22" rx="7" fill="var(--brand-soft)"/>
                            <path d="M41 255.5c0-.8.7-1.5 1.5-1.5h11c.8 0 1.5.7 1.5 1.5v9c0 .8-.7 1.5-1.5 1.5h-11c-.8 0-1.5-.7-1.5-1.5zm2 .5 5.5 3.8 5.5-3.8z" fill="var(--brand)"/>
                            <text x="64" y="264" font-family="system-ui, sans-serif" font-size="12" fill="#334155">julie@dupont-toiture.be</text>
                            <g>
                                <rect x="64" y="288" width="36" height="36" rx="12" fill="#F1F5F9"/>
                                <path d="M76 306a4 4 0 0 1 4-4h2v2.4h-2a1.6 1.6 0 0 0 0 3.2h2V310h-2a4 4 0 0 1-4-4zm12 0a4 4 0 0 0-4-4h-2v2.4h2a1.6 1.6 0 0 1 0 3.2h-2V310h2a4 4 0 0 0 4-4zm-9 0h6v2h-6z" fill="#475569"/>
                                <rect x="112" y="288" width="36" height="36" rx="12" fill="#F1F5F9"/>
                                <circle cx="130" cy="306" r="8" fill="none" stroke="#475569" stroke-width="1.8"/>
                                <path d="M122 306h16M130 298c2.4 2.4 2.4 13.6 0 16M130 298c-2.4 2.4-2.4 13.6 0 16" fill="none" stroke="#475569" stroke-width="1.8"/>
                                <rect x="160" y="288" width="36" height="36" rx="12" fill="#F1F5F9"/>
                                <path d="M170 301.5c0-.8.7-1.5 1.5-1.5h13c.8 0 1.5.7 1.5 1.5v8c0 .8-.7 1.5-1.5 1.5H178l-4.5 3.5V311h-2a1.5 1.5 0 0 1-1.5-1.5z" fill="#475569"/>
                            </g>
                            <rect x="74" y="340" width="112" height="112" rx="14" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.5"/>
                            <g transform="translate(86 352) scale(4.19)" fill="#0F172A" shape-rendering="crispEdges">
                                <path d="M0 0h7v1H0zM8 0h1v1H8zM12 0h1v1H12zM14 0h7v1H14zM0 1h1v1H0zM6 1h1v1H6zM8 1h2v1H8zM11 1h1v1H11zM14 1h1v1H14zM20 1h1v1H20zM0 2h1v1H0zM2 2h3v1H2zM6 2h1v1H6zM8 2h5v1H8zM14 2h1v1H14zM16 2h3v1H16zM20 2h1v1H20zM0 3h1v1H0zM2 3h3v1H2zM6 3h1v1H6zM8 3h1v1H8zM10 3h1v1H10zM12 3h1v1H12zM14 3h1v1H14zM16 3h3v1H16zM20 3h1v1H20zM0 4h1v1H0zM2 4h3v1H2zM6 4h1v1H6zM9 4h4v1H9zM14 4h1v1H14zM16 4h3v1H16zM20 4h1v1H20zM0 5h1v1H0zM6 5h1v1H6zM8 5h1v1H8zM10 5h1v1H10zM12 5h1v1H12zM14 5h1v1H14zM20 5h1v1H20zM0 6h7v1H0zM8 6h1v1H8zM10 6h1v1H10zM12 6h1v1H12zM14 6h7v1H14zM0 8h2v1H0zM4 8h3v1H4zM12 8h1v1H12zM15 8h1v1H15zM17 8h4v1H17zM1 9h1v1H1zM3 9h1v1H3zM7 9h1v1H7zM12 9h1v1H12zM16 9h1v1H16zM18 9h1v1H18zM2 10h5v1H2zM12 10h1v1H12zM14 10h4v1H14zM19 10h1v1H19zM1 11h2v1H1zM7 11h2v1H7zM10 11h4v1H10zM15 11h1v1H15zM20 11h1v1H20zM0 12h1v1H0zM5 12h4v1H5zM11 12h1v1H11zM13 12h1v1H13zM19 12h1v1H19zM8 13h7v1H8zM16 13h1v1H16zM19 13h1v1H19zM0 14h7v1H0zM11 14h1v1H11zM14 14h1v1H14zM16 14h2v1H16zM19 14h1v1H19zM0 15h1v1H0zM6 15h1v1H6zM8 15h3v1H8zM13 15h1v1H13zM16 15h1v1H16zM20 15h1v1H20zM0 16h1v1H0zM2 16h3v1H2zM6 16h1v1H6zM8 16h3v1H8zM12 16h2v1H12zM15 16h1v1H15zM19 16h1v1H19zM0 17h1v1H0zM2 17h3v1H2zM6 17h1v1H6zM12 17h1v1H12zM14 17h1v1H14zM16 17h1v1H16zM19 17h2v1H19zM0 18h1v1H0zM2 18h3v1H2zM6 18h1v1H6zM10 18h1v1H10zM12 18h2v1H12zM16 18h1v1H16zM0 19h1v1H0zM6 19h1v1H6zM8 19h5v1H8zM0 20h7v1H0zM8 20h4v1H8zM13 20h3v1H13zM17 20h1v1H17zM20 20h1v1H20z"/>
                            </g>
                            <rect x="40" y="468" width="180" height="34" rx="17" fill="var(--brand)"/>
                            <text x="130" y="490" text-anchor="middle" font-family="system-ui, sans-serif" font-size="12" font-weight="600" fill="#FFFFFF">Ajouter aux contacts</text>
                        </svg>
                    </div>
                </div>

                {{-- ───────── Colonne formulaire ───────── --}}
                <div id="formulaire" class="scroll-mt-6">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-7">
                        <h2 class="text-lg font-semibold text-slate-900">Créer ma carte</h2>
                        <p class="mt-1 text-sm text-slate-600">Entreprise, contact, réseaux sociaux, logo, couleur.</p>

                        {{-- ▼ EMPLACEMENT DU FORMULAIRE : remplacez tout ce bloc par @include('carte.partials.formulaire') --}}
                        <div class="mt-6 space-y-4" aria-hidden="true">
                            <div class="space-y-1.5">
                                <div class="h-3 w-24 rounded bg-slate-200"></div>
                                <div class="h-11 rounded-lg border border-slate-200 bg-slate-50"></div>
                            </div>
                            <div class="space-y-1.5">
                                <div class="h-3 w-20 rounded bg-slate-200"></div>
                                <div class="h-11 rounded-lg border border-slate-200 bg-slate-50"></div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="space-y-1.5">
                                    <div class="h-3 w-16 rounded bg-slate-200"></div>
                                    <div class="h-11 rounded-lg border border-slate-200 bg-slate-50"></div>
                                </div>
                                <div class="space-y-1.5">
                                    <div class="h-3 w-16 rounded bg-slate-200"></div>
                                    <div class="h-11 rounded-lg border border-slate-200 bg-slate-50"></div>
                                </div>
                            </div>
                            <div class="h-11 rounded-lg bg-[var(--brand)] opacity-90"></div>
                        </div>
                        {{-- ▲ FIN DE L'EMPLACEMENT --}}
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════════════════
     Hero, variante 2 : « la carte qui ne se perd pas »
     Le visuel passe en premier dans la colonne de gauche.
     Tailwind CSS 4. Aucune dépendance externe, aucun JavaScript.
     ═══════════════════════════════════════════════════════════════════════ --}}

    <section
        class="relative bg-[#F6F7FC]"
        style="--brand:#1732AB; --brand-dark:#122885; --brand-soft:#E7EBF8;"
        aria-labelledby="hero-titre"
    >
        <div class="mx-auto max-w-6xl px-5 py-10 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
            <div class="grid items-center gap-10 lg:grid-cols-[minmax(0,1fr)_330px] lg:gap-10 xl:grid-cols-[minmax(0,1fr)_390px] xl:gap-12">

                {{-- ───────── Colonne promesse ───────── --}}
                <div class="sm:grid sm:grid-cols-[190px_minmax(0,1fr)] sm:items-center sm:gap-8 lg:grid-cols-[170px_minmax(0,1fr)] lg:gap-6 xl:grid-cols-[205px_minmax(0,1fr)] xl:gap-9">

                    {{-- Aperçu : téléphone à partir de 640 px, bandeau compact en dessous --}}
                    <div class="hidden sm:flex sm:justify-center">
                        <svg viewBox="0 0 260 520" class="h-auto w-[170px] drop-shadow-xl lg:w-[190px]" role="img" aria-labelledby="apercu-titre">
                            <title id="apercu-titre">Aperçu d'une carte de visite numérique sur un téléphone : logo, nom, coordonnées, boutons de réseaux sociaux, QR code et bouton d'ajout aux contacts.</title>
                            <rect x="0" y="0" width="260" height="520" rx="34" fill="#0F172A"/>
                            <rect x="8" y="8" width="244" height="504" rx="28" fill="#FFFFFF"/>
                            <rect x="8" y="8" width="244" height="120" rx="28" fill="var(--brand)"/>
                            <rect x="8" y="100" width="244" height="28" fill="var(--brand)"/>
                            <rect x="98" y="16" width="64" height="9" rx="4.5" fill="#0F172A" opacity=".45"/>
                            <circle cx="130" cy="116" r="31" fill="#FFFFFF"/>
                            <circle cx="130" cy="116" r="31" fill="none" stroke="#E2E8F0" stroke-width="1.5"/>
                            <text x="130" y="124" text-anchor="middle" font-family="system-ui, sans-serif" font-size="22" font-weight="700" fill="var(--brand)">JD</text>
                            <text x="130" y="176" text-anchor="middle" font-family="system-ui, sans-serif" font-size="17" font-weight="700" fill="#0F172A">Julie Dupont</text>
                            <text x="130" y="195" text-anchor="middle" font-family="system-ui, sans-serif" font-size="11" fill="#64748B">Dupont &amp; Fille, toiture</text>
                            <rect x="34" y="216" width="22" height="22" rx="7" fill="var(--brand-soft)"/>
                            <path d="M41 222.5c0-.8.7-1.5 1.5-1.5h1.6c.6 0 1.2.4 1.4 1l.5 1.6c.2.5 0 1.1-.4 1.4l-.8.6c.6 1.3 1.6 2.3 2.9 2.9l.6-.8c.3-.4.9-.6 1.4-.4l1.6.5c.6.2 1 .8 1 1.4v1.6c0 .8-.7 1.5-1.5 1.5-5.4 0-9.8-4.4-9.8-9.8z" fill="var(--brand)"/>
                            <text x="64" y="232" font-family="system-ui, sans-serif" font-size="12" fill="#334155">+32 478 12 34 56</text>
                            <rect x="34" y="248" width="22" height="22" rx="7" fill="var(--brand-soft)"/>
                            <path d="M41 255.5c0-.8.7-1.5 1.5-1.5h11c.8 0 1.5.7 1.5 1.5v9c0 .8-.7 1.5-1.5 1.5h-11c-.8 0-1.5-.7-1.5-1.5zm2 .5 5.5 3.8 5.5-3.8z" fill="var(--brand)"/>
                            <text x="64" y="264" font-family="system-ui, sans-serif" font-size="12" fill="#334155">julie@dupont-toiture.be</text>
                            <g>
                                <rect x="64" y="288" width="36" height="36" rx="12" fill="#F1F5F9"/>
                                <path d="M76 306a4 4 0 0 1 4-4h2v2.4h-2a1.6 1.6 0 0 0 0 3.2h2V310h-2a4 4 0 0 1-4-4zm12 0a4 4 0 0 0-4-4h-2v2.4h2a1.6 1.6 0 0 1 0 3.2h-2V310h2a4 4 0 0 0 4-4zm-9 0h6v2h-6z" fill="#475569"/>
                                <rect x="112" y="288" width="36" height="36" rx="12" fill="#F1F5F9"/>
                                <circle cx="130" cy="306" r="8" fill="none" stroke="#475569" stroke-width="1.8"/>
                                <path d="M122 306h16M130 298c2.4 2.4 2.4 13.6 0 16M130 298c-2.4 2.4-2.4 13.6 0 16" fill="none" stroke="#475569" stroke-width="1.8"/>
                                <rect x="160" y="288" width="36" height="36" rx="12" fill="#F1F5F9"/>
                                <path d="M170 301.5c0-.8.7-1.5 1.5-1.5h13c.8 0 1.5.7 1.5 1.5v8c0 .8-.7 1.5-1.5 1.5H178l-4.5 3.5V311h-2a1.5 1.5 0 0 1-1.5-1.5z" fill="#475569"/>
                            </g>
                            <rect x="74" y="340" width="112" height="112" rx="14" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.5"/>
                            <g transform="translate(86 352) scale(4.19)" fill="#0F172A" shape-rendering="crispEdges">
                                <path d="M0 0h7v1H0zM8 0h1v1H8zM12 0h1v1H12zM14 0h7v1H14zM0 1h1v1H0zM6 1h1v1H6zM8 1h2v1H8zM11 1h1v1H11zM14 1h1v1H14zM20 1h1v1H20zM0 2h1v1H0zM2 2h3v1H2zM6 2h1v1H6zM8 2h5v1H8zM14 2h1v1H14zM16 2h3v1H16zM20 2h1v1H20zM0 3h1v1H0zM2 3h3v1H2zM6 3h1v1H6zM8 3h1v1H8zM10 3h1v1H10zM12 3h1v1H12zM14 3h1v1H14zM16 3h3v1H16zM20 3h1v1H20zM0 4h1v1H0zM2 4h3v1H2zM6 4h1v1H6zM9 4h4v1H9zM14 4h1v1H14zM16 4h3v1H16zM20 4h1v1H20zM0 5h1v1H0zM6 5h1v1H6zM8 5h1v1H8zM10 5h1v1H10zM12 5h1v1H12zM14 5h1v1H14zM20 5h1v1H20zM0 6h7v1H0zM8 6h1v1H8zM10 6h1v1H10zM12 6h1v1H12zM14 6h7v1H14zM0 8h2v1H0zM4 8h3v1H4zM12 8h1v1H12zM15 8h1v1H15zM17 8h4v1H17zM1 9h1v1H1zM3 9h1v1H3zM7 9h1v1H7zM12 9h1v1H12zM16 9h1v1H16zM18 9h1v1H18zM2 10h5v1H2zM12 10h1v1H12zM14 10h4v1H14zM19 10h1v1H19zM1 11h2v1H1zM7 11h2v1H7zM10 11h4v1H10zM15 11h1v1H15zM20 11h1v1H20zM0 12h1v1H0zM5 12h4v1H5zM11 12h1v1H11zM13 12h1v1H13zM19 12h1v1H19zM8 13h7v1H8zM16 13h1v1H16zM19 13h1v1H19zM0 14h7v1H0zM11 14h1v1H11zM14 14h1v1H14zM16 14h2v1H16zM19 14h1v1H19zM0 15h1v1H0zM6 15h1v1H6zM8 15h3v1H8zM13 15h1v1H13zM16 15h1v1H16zM20 15h1v1H20zM0 16h1v1H0zM2 16h3v1H2zM6 16h1v1H6zM8 16h3v1H8zM12 16h2v1H12zM15 16h1v1H15zM19 16h1v1H19zM0 17h1v1H0zM2 17h3v1H2zM6 17h1v1H6zM12 17h1v1H12zM14 17h1v1H14zM16 17h1v1H16zM19 17h2v1H19zM0 18h1v1H0zM2 18h3v1H2zM6 18h1v1H6zM10 18h1v1H10zM12 18h2v1H12zM16 18h1v1H16zM0 19h1v1H0zM6 19h1v1H6zM8 19h5v1H8zM0 20h7v1H0zM8 20h4v1H8zM13 20h3v1H13zM17 20h1v1H17zM20 20h1v1H20z"/>
                            </g>
                            <rect x="40" y="468" width="180" height="34" rx="17" fill="var(--brand)"/>
                            <text x="130" y="490" text-anchor="middle" font-family="system-ui, sans-serif" font-size="12" font-weight="600" fill="#FFFFFF">Ajouter aux contacts</text>
                        </svg>
                    </div>

                    <div class="max-w-xl">
                        <h1 id="hero-titre" class="text-[1.75rem] font-bold leading-[1.15] tracking-tight text-slate-900 sm:text-[2.1rem] lg:text-[2rem] xl:text-[2.5rem]">
                            Une carte de visite qui ne se perd pas
                        </h1>

                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">
                            Vos contacts scannent votre QR code et vos coordonnées s'ajoutent à leur carnet d'adresses.
                            Le lien de votre carte, lui, se partage par message, par mail ou sur vos réseaux.
                        </p>

                        {{-- Version compacte du visuel, réservée au mobile pour garder le hero court --}}
                        <div class="mt-6 sm:hidden">
                            <svg viewBox="0 0 330 84" class="h-auto w-full max-w-[330px]" role="img" aria-labelledby="mini-titre">
                                <title id="mini-titre">Aperçu d'une carte de visite numérique : logo, nom, coordonnées et QR code.</title>
                                <rect x="1" y="1" width="328" height="82" rx="16" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.5"/>
                                <circle cx="42" cy="42" r="21" fill="var(--brand-soft)"/>
                                <text x="42" y="49" text-anchor="middle" font-family="system-ui, sans-serif" font-size="16" font-weight="700" fill="var(--brand)">JD</text>
                                <text x="74" y="35" font-family="system-ui, sans-serif" font-size="14" font-weight="700" fill="#0F172A">Julie Dupont</text>
                                <text x="74" y="52" font-family="system-ui, sans-serif" font-size="11" fill="#64748B">Dupont &amp; Fille, toiture</text>
                                <text x="74" y="67" font-family="system-ui, sans-serif" font-size="11" fill="#64748B">+32 478 12 34 56</text>
                                <rect x="254" y="14" width="56" height="56" rx="10" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
                                <g transform="translate(260 20) scale(2.1)" fill="#0F172A" shape-rendering="crispEdges">
                                    <path d="M0 0h7v1H0zM8 0h1v1H8zM12 0h1v1H12zM14 0h7v1H14zM0 1h1v1H0zM6 1h1v1H6zM8 1h2v1H8zM11 1h1v1H11zM14 1h1v1H14zM20 1h1v1H20zM0 2h1v1H0zM2 2h3v1H2zM6 2h1v1H6zM8 2h5v1H8zM14 2h1v1H14zM16 2h3v1H16zM20 2h1v1H20zM0 3h1v1H0zM2 3h3v1H2zM6 3h1v1H6zM8 3h1v1H8zM10 3h1v1H10zM12 3h1v1H12zM14 3h1v1H14zM16 3h3v1H16zM20 3h1v1H20zM0 4h1v1H0zM2 4h3v1H2zM6 4h1v1H6zM9 4h4v1H9zM14 4h1v1H14zM16 4h3v1H16zM20 4h1v1H20zM0 5h1v1H0zM6 5h1v1H6zM8 5h1v1H8zM10 5h1v1H10zM12 5h1v1H12zM14 5h1v1H14zM20 5h1v1H20zM0 6h7v1H0zM8 6h1v1H8zM10 6h1v1H10zM12 6h1v1H12zM14 6h7v1H14zM0 8h2v1H0zM4 8h3v1H4zM12 8h1v1H12zM15 8h1v1H15zM17 8h4v1H17zM1 9h1v1H1zM3 9h1v1H3zM7 9h1v1H7zM12 9h1v1H12zM16 9h1v1H16zM18 9h1v1H18zM2 10h5v1H2zM12 10h1v1H12zM14 10h4v1H14zM19 10h1v1H19zM1 11h2v1H1zM7 11h2v1H7zM10 11h4v1H10zM15 11h1v1H15zM20 11h1v1H20zM0 12h1v1H0zM5 12h4v1H5zM11 12h1v1H11zM13 12h1v1H13zM19 12h1v1H19zM8 13h7v1H8zM16 13h1v1H16zM19 13h1v1H19zM0 14h7v1H0zM11 14h1v1H11zM14 14h1v1H14zM16 14h2v1H16zM19 14h1v1H19zM0 15h1v1H0zM6 15h1v1H6zM8 15h3v1H8zM13 15h1v1H13zM16 15h1v1H16zM20 15h1v1H20zM0 16h1v1H0zM2 16h3v1H2zM6 16h1v1H6zM8 16h3v1H8zM12 16h2v1H12zM15 16h1v1H15zM19 16h1v1H19zM0 17h1v1H0zM2 17h3v1H2zM6 17h1v1H6zM12 17h1v1H12zM14 17h1v1H14zM16 17h1v1H16zM19 17h2v1H19zM0 18h1v1H0zM2 18h3v1H2zM6 18h1v1H6zM10 18h1v1H10zM12 18h2v1H12zM16 18h1v1H16zM0 19h1v1H0zM6 19h1v1H6zM8 19h5v1H8zM0 20h7v1H0zM8 20h4v1H8zM13 20h3v1H13zM17 20h1v1H17zM20 20h1v1H20z"/>
                                </g>
                            </svg>
                        </div>

                        <div class="mt-6">
                            <a
                                href="#formulaire"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-[var(--brand)] px-6 py-3.5 text-base font-semibold text-white transition-colors hover:bg-[var(--brand-dark)] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[var(--brand)] sm:w-auto"
                            >
                                Créer ma carte gratuite
                                <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M10.6 3.3a1 1 0 0 0-1.4 1.4l3.9 3.9H3a1 1 0 1 0 0 2h10.1l-3.9 3.9a1 1 0 1 0 1.4 1.4l5.6-5.6a1 1 0 0 0 0-1.4z"/></svg>
                            </a>

                            {{-- ▼ PHRASE DE RÉASSURANCE : à remplacer par votre formulation validée --}}
                            <p class="mt-3 text-sm text-slate-600">
                                Vos informations servent uniquement à créer votre carte.
                            </p>
                        </div>

                        <ul class="mt-6 flex flex-wrap gap-2">
                            <li class="rounded-full border border-slate-200 bg-white px-3 py-1.5 text-sm text-slate-700">Gratuit, sans abonnement</li>
                            <li class="rounded-full border border-slate-200 bg-white px-3 py-1.5 text-sm text-slate-700">Sans compte ni mot de passe</li>
                            <li class="rounded-full border border-slate-200 bg-white px-3 py-1.5 text-sm text-slate-700">En ligne après ma validation</li>
                        </ul>
                    </div>
                </div>

                {{-- ───────── Colonne formulaire ───────── --}}
                <div id="formulaire" class="scroll-mt-6">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-7">
                        <h2 class="text-lg font-semibold text-slate-900">Créer ma carte</h2>
                        <p class="mt-1 text-sm text-slate-600">Entreprise, contact, réseaux sociaux, logo, couleur.</p>

                        {{-- ▼ EMPLACEMENT DU FORMULAIRE : remplacez tout ce bloc par @include('carte.partials.formulaire') --}}
                        <div class="mt-6 space-y-4" aria-hidden="true">
                            <div class="space-y-1.5">
                                <div class="h-3 w-24 rounded bg-slate-200"></div>
                                <div class="h-11 rounded-lg border border-slate-200 bg-slate-50"></div>
                            </div>
                            <div class="space-y-1.5">
                                <div class="h-3 w-20 rounded bg-slate-200"></div>
                                <div class="h-11 rounded-lg border border-slate-200 bg-slate-50"></div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="space-y-1.5">
                                    <div class="h-3 w-16 rounded bg-slate-200"></div>
                                    <div class="h-11 rounded-lg border border-slate-200 bg-slate-50"></div>
                                </div>
                                <div class="space-y-1.5">
                                    <div class="h-3 w-16 rounded bg-slate-200"></div>
                                    <div class="h-11 rounded-lg border border-slate-200 bg-slate-50"></div>
                                </div>
                            </div>
                            <div class="h-11 rounded-lg bg-[var(--brand)] opacity-90"></div>
                        </div>
                        {{-- ▲ FIN DE L'EMPLACEMENT --}}
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════════════════
     Hero, variante 3 : « le lien à partager »
     Promesse sur un panneau de couleur, formulaire sur fond blanc à côté.
     Tailwind CSS 4. Aucune dépendance externe, aucun JavaScript.
     ═══════════════════════════════════════════════════════════════════════ --}}

    <section
        class="relative bg-white"
        style="--brand:#1732AB; --brand-dark:#122885; --brand-soft:#E7EBF8;"
        aria-labelledby="hero-titre"
    >
        <div class="mx-auto max-w-6xl px-5 py-8 sm:px-6 sm:py-10 lg:px-8 lg:py-14">
            <div class="grid items-center gap-8 lg:grid-cols-[minmax(0,1fr)_330px] lg:gap-10 xl:grid-cols-[minmax(0,1fr)_390px]">

                {{-- ───────── Panneau promesse ───────── --}}
                <div class="relative rounded-3xl bg-[var(--brand)] px-5 py-8 sm:px-9 sm:py-10 md:pr-[200px] lg:pr-[175px] xl:pr-[245px]">

                    <p class="text-sm font-medium text-[#C3CEEF]">Carte de visite numérique, gratuite</p>

                    <h1 id="hero-titre" class="mt-3 text-[1.75rem] font-bold leading-[1.15] tracking-tight text-white sm:text-[2.1rem] lg:text-[2.1rem] xl:text-[2.6rem]">
                        Partagez vos coordonnées en un lien, sans carton ni appli
                    </h1>

                    <p class="mt-4 max-w-lg text-base leading-relaxed text-[#DCE3F7] sm:text-lg">
                        Une page web à votre nom, avec votre logo, vos réseaux, un QR code à faire scanner et un
                        bouton qui ajoute vos coordonnées au carnet d'adresses.
                    </p>

                    {{-- Version compacte du visuel, réservée au mobile pour garder le hero court --}}
                    <div class="mt-6 md:hidden">
                        <svg viewBox="0 0 330 84" class="h-auto w-full max-w-[330px]" role="img" aria-labelledby="mini-titre">
                            <title id="mini-titre">Aperçu d'une carte de visite numérique : logo, nom, coordonnées et QR code.</title>
                            <rect x="1" y="1" width="328" height="82" rx="16" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.5"/>
                            <circle cx="42" cy="42" r="21" fill="var(--brand-soft)"/>
                            <text x="42" y="49" text-anchor="middle" font-family="system-ui, sans-serif" font-size="16" font-weight="700" fill="var(--brand)">JD</text>
                            <text x="74" y="35" font-family="system-ui, sans-serif" font-size="14" font-weight="700" fill="#0F172A">Julie Dupont</text>
                            <text x="74" y="52" font-family="system-ui, sans-serif" font-size="11" fill="#64748B">Dupont &amp; Fille, toiture</text>
                            <text x="74" y="67" font-family="system-ui, sans-serif" font-size="11" fill="#64748B">+32 478 12 34 56</text>
                            <rect x="254" y="14" width="56" height="56" rx="10" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.2"/>
                            <g transform="translate(260 20) scale(2.1)" fill="#0F172A" shape-rendering="crispEdges">
                                <path d="M0 0h7v1H0zM8 0h1v1H8zM12 0h1v1H12zM14 0h7v1H14zM0 1h1v1H0zM6 1h1v1H6zM8 1h2v1H8zM11 1h1v1H11zM14 1h1v1H14zM20 1h1v1H20zM0 2h1v1H0zM2 2h3v1H2zM6 2h1v1H6zM8 2h5v1H8zM14 2h1v1H14zM16 2h3v1H16zM20 2h1v1H20zM0 3h1v1H0zM2 3h3v1H2zM6 3h1v1H6zM8 3h1v1H8zM10 3h1v1H10zM12 3h1v1H12zM14 3h1v1H14zM16 3h3v1H16zM20 3h1v1H20zM0 4h1v1H0zM2 4h3v1H2zM6 4h1v1H6zM9 4h4v1H9zM14 4h1v1H14zM16 4h3v1H16zM20 4h1v1H20zM0 5h1v1H0zM6 5h1v1H6zM8 5h1v1H8zM10 5h1v1H10zM12 5h1v1H12zM14 5h1v1H14zM20 5h1v1H20zM0 6h7v1H0zM8 6h1v1H8zM10 6h1v1H10zM12 6h1v1H12zM14 6h7v1H14zM0 8h2v1H0zM4 8h3v1H4zM12 8h1v1H12zM15 8h1v1H15zM17 8h4v1H17zM1 9h1v1H1zM3 9h1v1H3zM7 9h1v1H7zM12 9h1v1H12zM16 9h1v1H16zM18 9h1v1H18zM2 10h5v1H2zM12 10h1v1H12zM14 10h4v1H14zM19 10h1v1H19zM1 11h2v1H1zM7 11h2v1H7zM10 11h4v1H10zM15 11h1v1H15zM20 11h1v1H20zM0 12h1v1H0zM5 12h4v1H5zM11 12h1v1H11zM13 12h1v1H13zM19 12h1v1H19zM8 13h7v1H8zM16 13h1v1H16zM19 13h1v1H19zM0 14h7v1H0zM11 14h1v1H11zM14 14h1v1H14zM16 14h2v1H16zM19 14h1v1H19zM0 15h1v1H0zM6 15h1v1H6zM8 15h3v1H8zM13 15h1v1H13zM16 15h1v1H16zM20 15h1v1H20zM0 16h1v1H0zM2 16h3v1H2zM6 16h1v1H6zM8 16h3v1H8zM12 16h2v1H12zM15 16h1v1H15zM19 16h1v1H19zM0 17h1v1H0zM2 17h3v1H2zM6 17h1v1H6zM12 17h1v1H12zM14 17h1v1H14zM16 17h1v1H16zM19 17h2v1H19zM0 18h1v1H0zM2 18h3v1H2zM6 18h1v1H6zM10 18h1v1H10zM12 18h2v1H12zM16 18h1v1H16zM0 19h1v1H0zM6 19h1v1H6zM8 19h5v1H8zM0 20h7v1H0zM8 20h4v1H8zM13 20h3v1H13zM17 20h1v1H17zM20 20h1v1H20z"/>
                            </g>
                        </svg>
                    </div>

                    <ul class="mt-6 flex flex-col gap-2 text-sm text-[#DCE3F7] sm:flex-row sm:flex-wrap sm:gap-x-6 sm:text-base">
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M16.7 5.3a1 1 0 0 1 0 1.4l-7.5 7.5a1 1 0 0 1-1.4 0L3.3 9.7a1 1 0 1 1 1.4-1.4l3.8 3.8 6.8-6.8a1 1 0 0 1 1.4 0z"/></svg>
                            Gratuit, sans abonnement
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M16.7 5.3a1 1 0 0 1 0 1.4l-7.5 7.5a1 1 0 0 1-1.4 0L3.3 9.7a1 1 0 1 1 1.4-1.4l3.8 3.8 6.8-6.8a1 1 0 0 1 1.4 0z"/></svg>
                            Sans compte ni mot de passe
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M16.7 5.3a1 1 0 0 1 0 1.4l-7.5 7.5a1 1 0 0 1-1.4 0L3.3 9.7a1 1 0 1 1 1.4-1.4l3.8 3.8 6.8-6.8a1 1 0 0 1 1.4 0z"/></svg>
                            En ligne après ma validation
                        </li>
                    </ul>

                    <div class="mt-7">
                        <a
                            href="#formulaire"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-white px-6 py-3.5 text-base font-semibold text-[var(--brand)] transition-colors hover:bg-[var(--brand-soft)] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white sm:w-auto"
                        >
                            Créer ma carte gratuite
                            <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M10.6 3.3a1 1 0 0 0-1.4 1.4l3.9 3.9H3a1 1 0 1 0 0 2h10.1l-3.9 3.9a1 1 0 1 0 1.4 1.4l5.6-5.6a1 1 0 0 0 0-1.4z"/></svg>
                        </a>

                        {{-- ▼ PHRASE DE RÉASSURANCE : à remplacer par votre formulation validée --}}
                        <p class="mt-3 text-sm text-[#C3CEEF]">
                            Vos informations servent uniquement à créer votre carte.
                        </p>
                    </div>

                    {{-- Aperçu : dépasse du panneau à partir de 768 px --}}
                    <div class="absolute right-5 top-1/2 hidden -translate-y-1/2 md:block lg:right-4 xl:right-6">
                        <svg viewBox="0 0 260 520" class="h-auto w-[150px] drop-shadow-2xl lg:w-[145px] xl:w-[205px]" role="img" aria-labelledby="apercu-titre">
                            <title id="apercu-titre">Aperçu d'une carte de visite numérique sur un téléphone : logo, nom, coordonnées, boutons de réseaux sociaux, QR code et bouton d'ajout aux contacts.</title>
                            <rect x="0" y="0" width="260" height="520" rx="34" fill="#0F172A"/>
                            <rect x="8" y="8" width="244" height="504" rx="28" fill="#FFFFFF"/>
                            <rect x="8" y="8" width="244" height="120" rx="28" fill="var(--brand)"/>
                            <rect x="8" y="100" width="244" height="28" fill="var(--brand)"/>
                            <rect x="98" y="16" width="64" height="9" rx="4.5" fill="#0F172A" opacity=".45"/>
                            <circle cx="130" cy="116" r="31" fill="#FFFFFF"/>
                            <circle cx="130" cy="116" r="31" fill="none" stroke="#E2E8F0" stroke-width="1.5"/>
                            <text x="130" y="124" text-anchor="middle" font-family="system-ui, sans-serif" font-size="22" font-weight="700" fill="var(--brand)">JD</text>
                            <text x="130" y="176" text-anchor="middle" font-family="system-ui, sans-serif" font-size="17" font-weight="700" fill="#0F172A">Julie Dupont</text>
                            <text x="130" y="195" text-anchor="middle" font-family="system-ui, sans-serif" font-size="11" fill="#64748B">Dupont &amp; Fille, toiture</text>
                            <rect x="34" y="216" width="22" height="22" rx="7" fill="var(--brand-soft)"/>
                            <path d="M41 222.5c0-.8.7-1.5 1.5-1.5h1.6c.6 0 1.2.4 1.4 1l.5 1.6c.2.5 0 1.1-.4 1.4l-.8.6c.6 1.3 1.6 2.3 2.9 2.9l.6-.8c.3-.4.9-.6 1.4-.4l1.6.5c.6.2 1 .8 1 1.4v1.6c0 .8-.7 1.5-1.5 1.5-5.4 0-9.8-4.4-9.8-9.8z" fill="var(--brand)"/>
                            <text x="64" y="232" font-family="system-ui, sans-serif" font-size="12" fill="#334155">+32 478 12 34 56</text>
                            <rect x="34" y="248" width="22" height="22" rx="7" fill="var(--brand-soft)"/>
                            <path d="M41 255.5c0-.8.7-1.5 1.5-1.5h11c.8 0 1.5.7 1.5 1.5v9c0 .8-.7 1.5-1.5 1.5h-11c-.8 0-1.5-.7-1.5-1.5zm2 .5 5.5 3.8 5.5-3.8z" fill="var(--brand)"/>
                            <text x="64" y="264" font-family="system-ui, sans-serif" font-size="12" fill="#334155">julie@dupont-toiture.be</text>
                            <g>
                                <rect x="64" y="288" width="36" height="36" rx="12" fill="#F1F5F9"/>
                                <path d="M76 306a4 4 0 0 1 4-4h2v2.4h-2a1.6 1.6 0 0 0 0 3.2h2V310h-2a4 4 0 0 1-4-4zm12 0a4 4 0 0 0-4-4h-2v2.4h2a1.6 1.6 0 0 1 0 3.2h-2V310h2a4 4 0 0 0 4-4zm-9 0h6v2h-6z" fill="#475569"/>
                                <rect x="112" y="288" width="36" height="36" rx="12" fill="#F1F5F9"/>
                                <circle cx="130" cy="306" r="8" fill="none" stroke="#475569" stroke-width="1.8"/>
                                <path d="M122 306h16M130 298c2.4 2.4 2.4 13.6 0 16M130 298c-2.4 2.4-2.4 13.6 0 16" fill="none" stroke="#475569" stroke-width="1.8"/>
                                <rect x="160" y="288" width="36" height="36" rx="12" fill="#F1F5F9"/>
                                <path d="M170 301.5c0-.8.7-1.5 1.5-1.5h13c.8 0 1.5.7 1.5 1.5v8c0 .8-.7 1.5-1.5 1.5H178l-4.5 3.5V311h-2a1.5 1.5 0 0 1-1.5-1.5z" fill="#475569"/>
                            </g>
                            <rect x="74" y="340" width="112" height="112" rx="14" fill="#FFFFFF" stroke="#E2E8F0" stroke-width="1.5"/>
                            <g transform="translate(86 352) scale(4.19)" fill="#0F172A" shape-rendering="crispEdges">
                                <path d="M0 0h7v1H0zM8 0h1v1H8zM12 0h1v1H12zM14 0h7v1H14zM0 1h1v1H0zM6 1h1v1H6zM8 1h2v1H8zM11 1h1v1H11zM14 1h1v1H14zM20 1h1v1H20zM0 2h1v1H0zM2 2h3v1H2zM6 2h1v1H6zM8 2h5v1H8zM14 2h1v1H14zM16 2h3v1H16zM20 2h1v1H20zM0 3h1v1H0zM2 3h3v1H2zM6 3h1v1H6zM8 3h1v1H8zM10 3h1v1H10zM12 3h1v1H12zM14 3h1v1H14zM16 3h3v1H16zM20 3h1v1H20zM0 4h1v1H0zM2 4h3v1H2zM6 4h1v1H6zM9 4h4v1H9zM14 4h1v1H14zM16 4h3v1H16zM20 4h1v1H20zM0 5h1v1H0zM6 5h1v1H6zM8 5h1v1H8zM10 5h1v1H10zM12 5h1v1H12zM14 5h1v1H14zM20 5h1v1H20zM0 6h7v1H0zM8 6h1v1H8zM10 6h1v1H10zM12 6h1v1H12zM14 6h7v1H14zM0 8h2v1H0zM4 8h3v1H4zM12 8h1v1H12zM15 8h1v1H15zM17 8h4v1H17zM1 9h1v1H1zM3 9h1v1H3zM7 9h1v1H7zM12 9h1v1H12zM16 9h1v1H16zM18 9h1v1H18zM2 10h5v1H2zM12 10h1v1H12zM14 10h4v1H14zM19 10h1v1H19zM1 11h2v1H1zM7 11h2v1H7zM10 11h4v1H10zM15 11h1v1H15zM20 11h1v1H20zM0 12h1v1H0zM5 12h4v1H5zM11 12h1v1H11zM13 12h1v1H13zM19 12h1v1H19zM8 13h7v1H8zM16 13h1v1H16zM19 13h1v1H19zM0 14h7v1H0zM11 14h1v1H11zM14 14h1v1H14zM16 14h2v1H16zM19 14h1v1H19zM0 15h1v1H0zM6 15h1v1H6zM8 15h3v1H8zM13 15h1v1H13zM16 15h1v1H16zM20 15h1v1H20zM0 16h1v1H0zM2 16h3v1H2zM6 16h1v1H6zM8 16h3v1H8zM12 16h2v1H12zM15 16h1v1H15zM19 16h1v1H19zM0 17h1v1H0zM2 17h3v1H2zM6 17h1v1H6zM12 17h1v1H12zM14 17h1v1H14zM16 17h1v1H16zM19 17h2v1H19zM0 18h1v1H0zM2 18h3v1H2zM6 18h1v1H6zM10 18h1v1H10zM12 18h2v1H12zM16 18h1v1H16zM0 19h1v1H0zM6 19h1v1H6zM8 19h5v1H8zM0 20h7v1H0zM8 20h4v1H8zM13 20h3v1H13zM17 20h1v1H17zM20 20h1v1H20z"/>
                            </g>
                            <rect x="40" y="468" width="180" height="34" rx="17" fill="var(--brand)"/>
                            <text x="130" y="490" text-anchor="middle" font-family="system-ui, sans-serif" font-size="12" font-weight="600" fill="#FFFFFF">Ajouter aux contacts</text>
                        </svg>
                    </div>
                </div>

                {{-- ───────── Colonne formulaire ───────── --}}
                <div id="formulaire" class="scroll-mt-6">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-7">
                        <h2 class="text-lg font-semibold text-slate-900">Créer ma carte</h2>
                        <p class="mt-1 text-sm text-slate-600">Entreprise, contact, réseaux sociaux, logo, couleur.</p>

                        {{-- ▼ EMPLACEMENT DU FORMULAIRE : remplacez tout ce bloc par @include('carte.partials.formulaire') --}}
                        <div class="mt-6 space-y-4" aria-hidden="true">
                            <div class="space-y-1.5">
                                <div class="h-3 w-24 rounded bg-slate-200"></div>
                                <div class="h-11 rounded-lg border border-slate-200 bg-slate-50"></div>
                            </div>
                            <div class="space-y-1.5">
                                <div class="h-3 w-20 rounded bg-slate-200"></div>
                                <div class="h-11 rounded-lg border border-slate-200 bg-slate-50"></div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="space-y-1.5">
                                    <div class="h-3 w-16 rounded bg-slate-200"></div>
                                    <div class="h-11 rounded-lg border border-slate-200 bg-slate-50"></div>
                                </div>
                                <div class="space-y-1.5">
                                    <div class="h-3 w-16 rounded bg-slate-200"></div>
                                    <div class="h-11 rounded-lg border border-slate-200 bg-slate-50"></div>
                                </div>
                            </div>
                            <div class="h-11 rounded-lg bg-[var(--brand)] opacity-90"></div>
                        </div>
                        {{-- ▲ FIN DE L'EMPLACEMENT --}}
                    </div>
                </div>

            </div>
        </div>
    </section>
    </body>
</html>
