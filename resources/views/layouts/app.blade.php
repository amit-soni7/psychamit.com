<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?: 'PsychAmit.com' }}</title>
    <meta name="author" content="TheCodeholic">
    <meta name="description" content="{{ $metaDescription }}">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
    </style>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
            integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

    @livewireStyles
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-stone-200 font-serif">


<!-- Text Header -->
<header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-7">
        <a class="font-bold font-sans text-gray-800 uppercase hover:text-gray-700 text-3xl" href="{{route('home')}}">
        <svg width="265" height="33" viewBox="0 0 265 33" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M50.9531 17.5156H45.0312V14.4062H50.9531C51.9844 14.4062 52.8177 14.2396 53.4531 13.9062C54.0885 13.5729 54.5521 13.1146 54.8438 12.5312C55.1458 11.9375 55.2969 11.2604 55.2969 10.5C55.2969 9.78125 55.1458 9.10938 54.8438 8.48438C54.5521 7.84896 54.0885 7.33854 53.4531 6.95312C52.8177 6.56771 51.9844 6.375 50.9531 6.375H46.2344V26H42.3125V3.25H50.9531C52.7135 3.25 54.2083 3.5625 55.4375 4.1875C56.6771 4.80208 57.6198 5.65625 58.2656 6.75C58.9115 7.83333 59.2344 9.07292 59.2344 10.4688C59.2344 11.9375 58.9115 13.1979 58.2656 14.25C57.6198 15.3021 56.6771 16.1094 55.4375 16.6719C54.2083 17.2344 52.7135 17.5156 50.9531 17.5156ZM71.8594 21.4219C71.8594 21.0469 71.7656 20.7083 71.5781 20.4062C71.3906 20.0938 71.0312 19.8125 70.5 19.5625C69.9792 19.3125 69.2083 19.0833 68.1875 18.875C67.2917 18.6771 66.4688 18.4427 65.7188 18.1719C64.9792 17.8906 64.3438 17.5521 63.8125 17.1562C63.2812 16.7604 62.8698 16.2917 62.5781 15.75C62.2865 15.2083 62.1406 14.5833 62.1406 13.875C62.1406 13.1875 62.2917 12.5365 62.5938 11.9219C62.8958 11.3073 63.3281 10.7656 63.8906 10.2969C64.4531 9.82812 65.1354 9.45833 65.9375 9.1875C66.75 8.91667 67.6562 8.78125 68.6562 8.78125C70.0729 8.78125 71.2865 9.02083 72.2969 9.5C73.3177 9.96875 74.099 10.6094 74.6406 11.4219C75.1823 12.224 75.4531 13.1302 75.4531 14.1406H71.6875C71.6875 13.6927 71.5729 13.276 71.3438 12.8906C71.125 12.4948 70.7917 12.1771 70.3438 11.9375C69.8958 11.6875 69.3333 11.5625 68.6562 11.5625C68.0104 11.5625 67.474 11.6667 67.0469 11.875C66.6302 12.0729 66.3177 12.3333 66.1094 12.6562C65.9115 12.9792 65.8125 13.3333 65.8125 13.7188C65.8125 14 65.8646 14.2552 65.9688 14.4844C66.0833 14.7031 66.2708 14.9062 66.5312 15.0938C66.7917 15.2708 67.1458 15.4375 67.5938 15.5938C68.0521 15.75 68.625 15.901 69.3125 16.0469C70.6042 16.3177 71.7135 16.6667 72.6406 17.0938C73.5781 17.5104 74.2969 18.0521 74.7969 18.7188C75.2969 19.375 75.5469 20.2083 75.5469 21.2188C75.5469 21.9688 75.3854 22.6562 75.0625 23.2812C74.75 23.8958 74.2917 24.4323 73.6875 24.8906C73.0833 25.3385 72.3594 25.6875 71.5156 25.9375C70.6823 26.1875 69.7448 26.3125 68.7031 26.3125C67.1719 26.3125 65.875 26.0417 64.8125 25.5C63.75 24.9479 62.9427 24.2448 62.3906 23.3906C61.849 22.526 61.5781 21.6302 61.5781 20.7031H65.2188C65.2604 21.401 65.4531 21.9583 65.7969 22.375C66.151 22.7812 66.5885 23.0781 67.1094 23.2656C67.6406 23.4427 68.1875 23.5312 68.75 23.5312C69.4271 23.5312 69.9948 23.4427 70.4531 23.2656C70.9115 23.0781 71.2604 22.8281 71.5 22.5156C71.7396 22.1927 71.8594 21.8281 71.8594 21.4219ZM83.75 24.1562L88.3438 9.09375H92.375L85.5938 28.5781C85.4375 28.9948 85.2344 29.4479 84.9844 29.9375C84.7344 30.4271 84.4062 30.8906 84 31.3281C83.6042 31.776 83.1094 32.1354 82.5156 32.4062C81.9219 32.6875 81.2031 32.8281 80.3594 32.8281C80.026 32.8281 79.7031 32.7969 79.3906 32.7344C79.0885 32.6823 78.8021 32.625 78.5312 32.5625L78.5156 29.6875C78.6198 29.6979 78.7448 29.7083 78.8906 29.7188C79.0469 29.7292 79.1719 29.7344 79.2656 29.7344C79.8906 29.7344 80.4115 29.6562 80.8281 29.5C81.2448 29.3542 81.5833 29.1146 81.8438 28.7812C82.1146 28.4479 82.3438 28 82.5312 27.4375L83.75 24.1562ZM81.1562 9.09375L85.1719 21.75L85.8438 25.7188L83.2344 26.3906L77.0938 9.09375H81.1562ZM101.219 23.3125C101.833 23.3125 102.385 23.1927 102.875 22.9531C103.375 22.7031 103.776 22.3594 104.078 21.9219C104.391 21.4844 104.562 20.9792 104.594 20.4062H108.141C108.12 21.5 107.797 22.4948 107.172 23.3906C106.547 24.2865 105.719 25 104.688 25.5312C103.656 26.0521 102.516 26.3125 101.266 26.3125C99.974 26.3125 98.849 26.0938 97.8906 25.6562C96.9323 25.2083 96.1354 24.5938 95.5 23.8125C94.8646 23.0312 94.3854 22.1302 94.0625 21.1094C93.75 20.0885 93.5938 18.9948 93.5938 17.8281V17.2812C93.5938 16.1146 93.75 15.0208 94.0625 14C94.3854 12.9688 94.8646 12.0625 95.5 11.2812C96.1354 10.5 96.9323 9.89062 97.8906 9.45312C98.849 9.00521 99.9688 8.78125 101.25 8.78125C102.604 8.78125 103.792 9.05208 104.812 9.59375C105.833 10.125 106.635 10.8698 107.219 11.8281C107.812 12.776 108.12 13.8802 108.141 15.1406H104.594C104.562 14.5156 104.406 13.9531 104.125 13.4531C103.854 12.9427 103.469 12.5365 102.969 12.2344C102.479 11.9323 101.891 11.7812 101.203 11.7812C100.443 11.7812 99.8125 11.9375 99.3125 12.25C98.8125 12.5521 98.4219 12.9688 98.1406 13.5C97.8594 14.0208 97.6562 14.6094 97.5312 15.2656C97.4167 15.9115 97.3594 16.5833 97.3594 17.2812V17.8281C97.3594 18.526 97.4167 19.2031 97.5312 19.8594C97.6458 20.5156 97.8438 21.1042 98.125 21.625C98.4167 22.1354 98.8125 22.5469 99.3125 22.8594C99.8125 23.1615 100.448 23.3125 101.219 23.3125ZM114.75 2V26H111V2H114.75ZM114.094 16.9219L112.875 16.9062C112.885 15.7396 113.047 14.6615 113.359 13.6719C113.682 12.6823 114.13 11.8229 114.703 11.0938C115.286 10.3542 115.984 9.78646 116.797 9.39062C117.609 8.98438 118.51 8.78125 119.5 8.78125C120.333 8.78125 121.083 8.89583 121.75 9.125C122.427 9.35417 123.01 9.72396 123.5 10.2344C123.99 10.7344 124.359 11.3906 124.609 12.2031C124.87 13.0052 125 13.9844 125 15.1406V26H121.219V15.1094C121.219 14.2969 121.099 13.651 120.859 13.1719C120.63 12.6927 120.292 12.349 119.844 12.1406C119.396 11.9219 118.849 11.8125 118.203 11.8125C117.526 11.8125 116.927 11.9479 116.406 12.2188C115.896 12.4896 115.469 12.8594 115.125 13.3281C114.781 13.7969 114.521 14.3385 114.344 14.9531C114.177 15.5677 114.094 16.224 114.094 16.9219ZM138.047 6.28125L131.25 26H127.141L135.703 3.25H138.328L138.047 6.28125ZM143.734 26L136.922 6.28125L136.625 3.25H139.266L147.859 26H143.734ZM143.406 17.5625V20.6719H131.031V17.5625H143.406ZM153.516 12.5312V26H149.75V9.09375H153.297L153.516 12.5312ZM152.906 16.9219L151.625 16.9062C151.625 15.7396 151.771 14.6615 152.062 13.6719C152.354 12.6823 152.781 11.8229 153.344 11.0938C153.906 10.3542 154.604 9.78646 155.438 9.39062C156.281 8.98438 157.255 8.78125 158.359 8.78125C159.13 8.78125 159.833 8.89583 160.469 9.125C161.115 9.34375 161.672 9.69271 162.141 10.1719C162.62 10.651 162.984 11.2656 163.234 12.0156C163.495 12.7656 163.625 13.6719 163.625 14.7344V26H159.859V15.0625C159.859 14.2396 159.734 13.5938 159.484 13.125C159.245 12.6562 158.896 12.3229 158.438 12.125C157.99 11.9167 157.453 11.8125 156.828 11.8125C156.12 11.8125 155.516 11.9479 155.016 12.2188C154.526 12.4896 154.125 12.8594 153.812 13.3281C153.5 13.7969 153.271 14.3385 153.125 14.9531C152.979 15.5677 152.906 16.224 152.906 16.9219ZM163.391 15.9219L161.625 16.3125C161.625 15.2917 161.766 14.3281 162.047 13.4219C162.339 12.5052 162.76 11.7031 163.312 11.0156C163.875 10.3177 164.568 9.77083 165.391 9.375C166.214 8.97917 167.156 8.78125 168.219 8.78125C169.083 8.78125 169.854 8.90104 170.531 9.14062C171.219 9.36979 171.802 9.73438 172.281 10.2344C172.76 10.7344 173.125 11.3854 173.375 12.1875C173.625 12.9792 173.75 13.9375 173.75 15.0625V26H169.969V15.0469C169.969 14.1927 169.844 13.5312 169.594 13.0625C169.354 12.5938 169.01 12.2708 168.562 12.0938C168.115 11.9062 167.578 11.8125 166.953 11.8125C166.37 11.8125 165.854 11.9219 165.406 12.1406C164.969 12.349 164.599 12.6458 164.297 13.0312C163.995 13.4062 163.766 13.8385 163.609 14.3281C163.464 14.8177 163.391 15.349 163.391 15.9219ZM181.656 9.09375V26H177.875V9.09375H181.656ZM177.625 4.65625C177.625 4.08333 177.812 3.60938 178.188 3.23438C178.573 2.84896 179.104 2.65625 179.781 2.65625C180.448 2.65625 180.974 2.84896 181.359 3.23438C181.745 3.60938 181.938 4.08333 181.938 4.65625C181.938 5.21875 181.745 5.6875 181.359 6.0625C180.974 6.4375 180.448 6.625 179.781 6.625C179.104 6.625 178.573 6.4375 178.188 6.0625C177.812 5.6875 177.625 5.21875 177.625 4.65625ZM193.531 9.09375V11.8438H184V9.09375H193.531ZM186.75 4.95312H190.516V21.3281C190.516 21.849 190.589 22.25 190.734 22.5312C190.891 22.8021 191.104 22.9844 191.375 23.0781C191.646 23.1719 191.964 23.2188 192.328 23.2188C192.589 23.2188 192.839 23.2031 193.078 23.1719C193.318 23.1406 193.51 23.1094 193.656 23.0781L193.672 25.9531C193.359 26.0469 192.995 26.1302 192.578 26.2031C192.172 26.276 191.703 26.3125 191.172 26.3125C190.307 26.3125 189.542 26.1615 188.875 25.8594C188.208 25.5469 187.688 25.0417 187.312 24.3438C186.938 23.6458 186.75 22.7188 186.75 21.5625V4.95312ZM196.594 24.125C196.594 23.5417 196.792 23.0521 197.188 22.6562C197.583 22.25 198.12 22.0469 198.797 22.0469C199.484 22.0469 200.021 22.25 200.406 22.6562C200.802 23.0521 201 23.5417 201 24.125C201 24.7083 200.802 25.1979 200.406 25.5938C200.021 25.9896 199.484 26.1875 198.797 26.1875C198.12 26.1875 197.583 25.9896 197.188 25.5938C196.792 25.1979 196.594 24.7083 196.594 24.125ZM212.25 23.3125C212.865 23.3125 213.417 23.1927 213.906 22.9531C214.406 22.7031 214.807 22.3594 215.109 21.9219C215.422 21.4844 215.594 20.9792 215.625 20.4062H219.172C219.151 21.5 218.828 22.4948 218.203 23.3906C217.578 24.2865 216.75 25 215.719 25.5312C214.688 26.0521 213.547 26.3125 212.297 26.3125C211.005 26.3125 209.88 26.0938 208.922 25.6562C207.964 25.2083 207.167 24.5938 206.531 23.8125C205.896 23.0312 205.417 22.1302 205.094 21.1094C204.781 20.0885 204.625 18.9948 204.625 17.8281V17.2812C204.625 16.1146 204.781 15.0208 205.094 14C205.417 12.9688 205.896 12.0625 206.531 11.2812C207.167 10.5 207.964 9.89062 208.922 9.45312C209.88 9.00521 211 8.78125 212.281 8.78125C213.635 8.78125 214.823 9.05208 215.844 9.59375C216.865 10.125 217.667 10.8698 218.25 11.8281C218.844 12.776 219.151 13.8802 219.172 15.1406H215.625C215.594 14.5156 215.438 13.9531 215.156 13.4531C214.885 12.9427 214.5 12.5365 214 12.2344C213.51 11.9323 212.922 11.7812 212.234 11.7812C211.474 11.7812 210.844 11.9375 210.344 12.25C209.844 12.5521 209.453 12.9688 209.172 13.5C208.891 14.0208 208.688 14.6094 208.562 15.2656C208.448 15.9115 208.391 16.5833 208.391 17.2812V17.8281C208.391 18.526 208.448 19.2031 208.562 19.8594C208.677 20.5156 208.875 21.1042 209.156 21.625C209.448 22.1354 209.844 22.5469 210.344 22.8594C210.844 23.1615 211.479 23.3125 212.25 23.3125ZM221.344 17.7344V17.375C221.344 16.1562 221.521 15.026 221.875 13.9844C222.229 12.9323 222.74 12.0208 223.406 11.25C224.083 10.4688 224.906 9.86458 225.875 9.4375C226.854 9 227.958 8.78125 229.188 8.78125C230.427 8.78125 231.531 9 232.5 9.4375C233.479 9.86458 234.307 10.4688 234.984 11.25C235.661 12.0208 236.177 12.9323 236.531 13.9844C236.885 15.026 237.062 16.1562 237.062 17.375V17.7344C237.062 18.9531 236.885 20.0833 236.531 21.125C236.177 22.1667 235.661 23.0781 234.984 23.8594C234.307 24.6302 233.484 25.2344 232.516 25.6719C231.547 26.099 230.448 26.3125 229.219 26.3125C227.979 26.3125 226.87 26.099 225.891 25.6719C224.922 25.2344 224.099 24.6302 223.422 23.8594C222.745 23.0781 222.229 22.1667 221.875 21.125C221.521 20.0833 221.344 18.9531 221.344 17.7344ZM225.109 17.375V17.7344C225.109 18.4948 225.188 19.2135 225.344 19.8906C225.5 20.5677 225.745 21.1615 226.078 21.6719C226.411 22.1823 226.839 22.5833 227.359 22.875C227.88 23.1667 228.5 23.3125 229.219 23.3125C229.917 23.3125 230.521 23.1667 231.031 22.875C231.552 22.5833 231.979 22.1823 232.312 21.6719C232.646 21.1615 232.891 20.5677 233.047 19.8906C233.214 19.2135 233.297 18.4948 233.297 17.7344V17.375C233.297 16.625 233.214 15.9167 233.047 15.25C232.891 14.5729 232.641 13.974 232.297 13.4531C231.964 12.9323 231.536 12.526 231.016 12.2344C230.505 11.9323 229.896 11.7812 229.188 11.7812C228.479 11.7812 227.865 11.9323 227.344 12.2344C226.833 12.526 226.411 12.9323 226.078 13.4531C225.745 13.974 225.5 14.5729 225.344 15.25C225.188 15.9167 225.109 16.625 225.109 17.375ZM243.984 12.5312V26H240.219V9.09375H243.766L243.984 12.5312ZM243.375 16.9219L242.094 16.9062C242.094 15.7396 242.24 14.6615 242.531 13.6719C242.823 12.6823 243.25 11.8229 243.812 11.0938C244.375 10.3542 245.073 9.78646 245.906 9.39062C246.75 8.98438 247.724 8.78125 248.828 8.78125C249.599 8.78125 250.302 8.89583 250.938 9.125C251.583 9.34375 252.141 9.69271 252.609 10.1719C253.089 10.651 253.453 11.2656 253.703 12.0156C253.964 12.7656 254.094 13.6719 254.094 14.7344V26H250.328V15.0625C250.328 14.2396 250.203 13.5938 249.953 13.125C249.714 12.6562 249.365 12.3229 248.906 12.125C248.458 11.9167 247.922 11.8125 247.297 11.8125C246.589 11.8125 245.984 11.9479 245.484 12.2188C244.995 12.4896 244.594 12.8594 244.281 13.3281C243.969 13.7969 243.74 14.3385 243.594 14.9531C243.448 15.5677 243.375 16.224 243.375 16.9219ZM253.859 15.9219L252.094 16.3125C252.094 15.2917 252.234 14.3281 252.516 13.4219C252.807 12.5052 253.229 11.7031 253.781 11.0156C254.344 10.3177 255.036 9.77083 255.859 9.375C256.682 8.97917 257.625 8.78125 258.688 8.78125C259.552 8.78125 260.323 8.90104 261 9.14062C261.688 9.36979 262.271 9.73438 262.75 10.2344C263.229 10.7344 263.594 11.3854 263.844 12.1875C264.094 12.9792 264.219 13.9375 264.219 15.0625V26H260.438V15.0469C260.438 14.1927 260.312 13.5312 260.062 13.0625C259.823 12.5938 259.479 12.2708 259.031 12.0938C258.583 11.9062 258.047 11.8125 257.422 11.8125C256.839 11.8125 256.323 11.9219 255.875 12.1406C255.438 12.349 255.068 12.6458 254.766 13.0312C254.464 13.4062 254.234 13.8385 254.078 14.3281C253.932 14.8177 253.859 15.349 253.859 15.9219Z" fill="#376486"/>
            <rect x="11.1261" y="20.1517" width="11.1263" height="9.81749" fill="#0B78C2"/>
            <rect y="10.162" width="10.9344" height="9.81749" fill="#2EBFF8"/>
            <rect x="10.9341" width="11.1263" height="9.81749" fill="url(#paint0_linear_0_1)"/>
            <path d="M21.9795 0.00243271C23.426 0.00211847 24.8585 0.25762 26.195 0.754351C27.5316 1.25108 28.7461 1.97931 29.7692 2.89746C30.7923 3.81561 31.604 4.90571 32.1579 6.1055C32.7118 7.30529 32.997 8.59129 32.9974 9.89007C32.9977 11.1888 32.7132 12.475 32.1599 13.675C31.6067 14.875 30.7956 15.9655 29.773 16.8841C28.7504 17.8027 27.5363 18.5314 26.2 19.0287C24.8637 19.5261 23.4314 19.7822 21.9848 19.7825L21.9822 9.89246L21.9795 0.00243271Z" fill="url(#paint1_linear_0_1)"/>
            <defs>
            <linearGradient id="paint0_linear_0_1" x1="21.4849" y1="5.68381" x2="11.9894" y2="5.57698" gradientUnits="userSpaceOnUse">
            <stop stop-color="#1B98DB"/>
            <stop offset="1" stop-color="#2EC0F9"/>
            </linearGradient>
            <linearGradient id="paint1_linear_0_1" x1="22.061" y1="9.81753" x2="32.9972" y2="9.90751" gradientUnits="userSpaceOnUse">
            <stop stop-color="#1894D8"/>
            <stop offset="1" stop-color="#056BB8"/>
            </linearGradient>
            </defs>
        </svg>
        </a>
        <p class="text-lg text-gray-600">
            {{ \App\Models\TextWidget::getTitle('header') }}
        </p>
    </div>
</header>

<!-- Topic Nav -->
<nav class="w-full py-4 border-t border-b bg-stone-200" x-data="{ open: false }">
    <div class="block sm:hidden">
        <a
            href="#"
            class="md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
            @click="open = !open"
        >
            Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
        </a>
    </div>
    <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
        <div
            class="w-full font-sans container mx-auto flex flex-col sm:flex-row items-center justify-between text-base tracking-wider font-medium uppercase mt-0 px-6 py-2">
            <div>
                <a href="{{route('home')}}" class="hover:bg-sky-600 hover:text-white rounded py-2 px-4 mx-2">Home</a>
                @foreach($categories as $category)
                    <a href="{{route('by-category', $category)}}"
                       class="hover:bg-sky-600 hover:text-white rounded py-2 px-4 mx-2">{{$category->title}}</a>
                @endforeach
                <a href="{{route('about-us')}}" class="hover:bg-sky-600 hover:text-white rounded py-2 px-4 mx-2">About</a>
            </div>

            <div class="flex items-center">
                <form method="get" action="{{route('search')}}">
                    <input name="q" value="{{request()->get('q')}}"
                           class="block w-full rounded-md border-0 px-3.5 py-2 t0ext-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 font-medium"
                           placeholder="Type an hit enter to search anything"/>
                </form>
                @auth
                    <div class="flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="hover:bg-sky-600 hover:text-white flex items-center rounded py-2 px-4 mx-2">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @else
                    <a href="{{route('login')}}"
                       class="hover:bg-blue-600 hover:text-white rounded py-2 px-4 mx-2">Login</a>
                    <a href="{{route('register')}}" class="bg-blue-600 text-white rounded py-2 px-4 mx-2">Register</a>
                @endauth
            </div>
        </div>
    </div>
</nav>


<div class="container mx-auto py-6">

    {{ $slot }}

</div>

<footer class="w-full border-t bg-stone-200 pb-6">
    <div class="w-full container mx-auto flex flex-col items-center">
        <div class="py-6">&copy; psychamit.com</div>
    </div>
</footer>

@livewireScripts
</body>
</html>
