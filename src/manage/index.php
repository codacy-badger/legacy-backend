<?php
session_start();
if($_SESSION['logged_in'] == True){
    header("Location: dashboard.php");
}
?>
<!Doctype html>
<html>
    <head>
        <title>Siyasat</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed|Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style>body { width:100%; background-color: #00D8EC; }</style>
    </head>
    <body>
        <nav class="z-depth-0" style="text-align:center !important;">
            <a href="#!">
                <svg width="120" viewBox="0 0 186 102" fill="none" xmlns="http://www.w3.org/2000/svg" style="background-color: #00D8EC; margin-top: 20px !important;">
                    <path d="M20.639 76.456C15.585 76.456 11.538 75.506 8.498 73.606C5.458 71.668 3.938 68.723 3.938 64.771C3.938 62.681 4.299 61.085 5.021 59.983C5.743 58.881 6.807 58.33 8.213 58.33C9.239 58.33 10.075 58.596 10.721 59.128C11.367 59.66 11.69 60.344 11.69 61.18C11.69 61.94 11.633 62.605 11.519 63.175C11.519 63.327 11.481 63.593 11.405 63.973C11.367 64.353 11.348 64.752 11.348 65.17C11.348 66.88 12.203 68.153 13.913 68.989C15.661 69.825 18.093 70.243 21.209 70.243C24.439 70.243 26.966 69.673 28.79 68.533C30.614 67.355 31.526 65.721 31.526 63.631C31.526 62.339 31.108 61.237 30.272 60.325C29.436 59.375 28.391 58.596 27.137 57.988C25.883 57.342 24.116 56.563 21.836 55.651C18.91 54.511 16.516 53.428 14.654 52.402C12.83 51.376 11.253 49.989 9.923 48.241C8.631 46.455 7.985 44.251 7.985 41.629C7.985 38.893 8.707 36.461 10.151 34.333C11.633 32.205 13.742 30.552 16.478 29.374C19.252 28.196 22.501 27.607 26.225 27.607C28.999 27.607 31.545 28.025 33.863 28.861C36.181 29.659 38.024 30.894 39.392 32.566C40.798 34.238 41.501 36.29 41.501 38.722C41.501 41.116 41.14 42.921 40.418 44.137C39.696 45.353 38.632 45.961 37.226 45.961C36.238 45.961 35.402 45.657 34.718 45.049C34.072 44.441 33.749 43.719 33.749 42.883C33.749 42.161 33.806 41.496 33.92 40.888C34.034 39.748 34.091 39.026 34.091 38.722C34.091 37.126 33.312 35.91 31.754 35.074C30.196 34.238 28.258 33.82 25.94 33.82C22.672 33.82 20.164 34.428 18.416 35.644C16.706 36.822 15.851 38.494 15.851 40.66C15.851 42.104 16.288 43.339 17.162 44.365C18.074 45.391 19.195 46.246 20.525 46.93C21.855 47.614 23.717 48.431 26.111 49.381C28.999 50.559 31.317 51.623 33.065 52.573C34.813 53.523 36.295 54.815 37.511 56.449C38.765 58.083 39.392 60.097 39.392 62.491C39.392 66.975 37.682 70.433 34.262 72.865C30.88 75.259 26.339 76.456 20.639 76.456ZM51.4462 45.676C49.8502 45.676 48.6532 45.315 47.8552 44.593C47.0572 43.833 46.6582 42.788 46.6582 41.458C46.6582 40.128 47.1712 39.026 48.1972 38.152C49.2612 37.24 50.5722 36.784 52.1302 36.784C53.5362 36.784 54.6762 37.126 55.5502 37.81C56.4242 38.494 56.8612 39.463 56.8612 40.717C56.8612 42.237 56.3672 43.453 55.3792 44.365C54.3912 45.239 53.0802 45.676 51.4462 45.676ZM50.9902 76.285C48.5202 76.285 46.7152 75.411 45.5752 73.663C44.4732 71.915 43.9222 69.597 43.9222 66.709C43.9222 64.999 44.1312 62.814 44.5492 60.154C45.0052 57.456 45.5752 54.948 46.2592 52.63C46.6012 51.414 47.0572 50.578 47.6272 50.122C48.1972 49.666 49.1092 49.438 50.3632 49.438C52.3012 49.438 53.2702 50.084 53.2702 51.376C53.2702 52.326 52.9092 54.53 52.1872 57.988C51.2752 62.168 50.8192 64.999 50.8192 66.481C50.8192 67.621 50.9712 68.495 51.2752 69.103C51.5792 69.711 52.0922 70.015 52.8142 70.015C53.4982 70.015 54.3532 69.54 55.3792 68.59C56.4052 67.64 57.7732 66.139 59.4832 64.087C59.9392 63.555 60.4522 63.289 61.0222 63.289C61.5162 63.289 61.8962 63.517 62.1622 63.973C62.4662 64.429 62.6182 65.056 62.6182 65.854C62.6182 67.374 62.2572 68.552 61.5352 69.388C57.7732 73.986 54.2582 76.285 50.9902 76.285ZM87.1905 63.403C87.6845 63.403 88.0645 63.65 88.3305 64.144C88.6345 64.6 88.7865 65.189 88.7865 65.911C88.7865 66.785 88.6535 67.469 88.3875 67.963C88.1215 68.457 87.7035 68.894 87.1335 69.274L76.1895 76.627C74.7455 84.493 72.8455 90.668 70.4895 95.152C68.1715 99.674 65.2075 101.935 61.5975 101.935C59.6595 101.935 58.0825 101.327 56.8665 100.111C55.6505 98.933 55.0425 97.375 55.0425 95.437C55.0425 93.651 55.4415 91.827 56.2395 89.965C57.0755 88.103 58.5955 85.956 60.7995 83.524C63.0415 81.13 66.1955 78.375 70.2615 75.259L70.4325 73.948C70.6985 72.542 71.0025 70.528 71.3445 67.906C70.5845 70.642 69.5205 72.732 68.1525 74.176C66.7845 75.582 65.3405 76.285 63.8205 76.285C62.1105 76.285 60.7045 75.506 59.6025 73.948C58.5385 72.352 58.0065 70.376 58.0065 68.02C58.0065 65.17 58.1965 62.567 58.5765 60.211C58.9565 57.817 59.5835 55.29 60.4575 52.63C60.8375 51.49 61.3695 50.673 62.0535 50.179C62.7375 49.685 63.8205 49.438 65.3025 49.438C66.1385 49.438 66.7085 49.571 67.0125 49.837C67.3545 50.103 67.5255 50.502 67.5255 51.034C67.5255 51.338 67.3165 52.364 66.8985 54.112C66.5185 55.518 66.2145 56.791 65.9865 57.931C65.6825 59.489 65.4165 60.99 65.1885 62.434C64.9605 63.84 64.8465 64.999 64.8465 65.911C64.8465 67.355 65.2455 68.077 66.0435 68.077C66.6135 68.077 67.3165 67.507 68.1525 66.367C69.0265 65.227 69.9385 63.498 70.8885 61.18C71.8765 58.862 72.8265 56.012 73.7385 52.63C74.0425 51.49 74.4985 50.673 75.1065 50.179C75.7525 49.685 76.7025 49.438 77.9565 49.438C78.8305 49.438 79.4385 49.552 79.7805 49.78C80.1225 50.008 80.2935 50.388 80.2935 50.92C80.2935 51.87 79.7995 55.138 78.8115 60.724L77.3295 69.901C80.2555 67.697 83.1055 65.683 85.8795 63.859C86.3735 63.555 86.8105 63.403 87.1905 63.403ZM62.2245 96.406C63.1745 96.406 64.2385 95.304 65.4165 93.1C66.5945 90.896 67.7725 87.229 68.9505 82.099C66.0245 84.569 63.8965 86.811 62.5665 88.825C61.2745 90.877 60.6285 92.663 60.6285 94.183C60.6285 94.829 60.7425 95.361 60.9705 95.779C61.2365 96.197 61.6545 96.406 62.2245 96.406ZM91.7363 76.285C89.3803 76.285 87.4993 75.43 86.0933 73.72C84.6873 72.01 83.9843 69.768 83.9843 66.994C83.9843 63.954 84.6873 61.085 86.0933 58.387C87.4993 55.651 89.3613 53.466 91.6793 51.832C94.0353 50.16 96.5243 49.324 99.1463 49.324C99.9823 49.324 100.533 49.495 100.799 49.837C101.103 50.141 101.35 50.711 101.54 51.547C102.338 51.395 103.174 51.319 104.048 51.319C105.91 51.319 106.841 51.984 106.841 53.314C106.841 54.112 106.556 56.012 105.986 59.014C105.112 63.384 104.675 66.424 104.675 68.134C104.675 68.704 104.808 69.16 105.074 69.502C105.378 69.844 105.758 70.015 106.214 70.015C106.936 70.015 107.81 69.559 108.836 68.647C109.862 67.697 111.249 66.177 112.997 64.087C113.453 63.555 113.966 63.289 114.536 63.289C115.03 63.289 115.41 63.517 115.676 63.973C115.98 64.429 116.132 65.056 116.132 65.854C116.132 67.374 115.771 68.552 115.049 69.388C113.491 71.326 111.838 72.96 110.09 74.29C108.342 75.62 106.651 76.285 105.017 76.285C103.763 76.285 102.604 75.867 101.54 75.031C100.514 74.157 99.7353 72.979 99.2033 71.497C97.2273 74.689 94.7383 76.285 91.7363 76.285ZM93.7883 70.528C94.6243 70.528 95.4223 70.034 96.1823 69.046C96.9423 68.058 97.4933 66.747 97.8353 65.113L99.9443 54.625C98.3483 54.663 96.8663 55.271 95.4983 56.449C94.1683 57.589 93.1043 59.109 92.3063 61.009C91.5083 62.909 91.1093 64.923 91.1093 67.051C91.1093 68.229 91.3373 69.103 91.7933 69.673C92.2873 70.243 92.9523 70.528 93.7883 70.528ZM122.102 77.539C120.126 77.539 118.606 77.083 117.542 76.171C116.516 75.259 116.003 74.233 116.003 73.093C116.003 72.105 116.364 71.25 117.086 70.528C117.808 69.806 118.872 69.445 120.278 69.445C120.772 69.445 121.342 69.502 121.988 69.616C122.672 69.692 123.185 69.749 123.527 69.787C123.489 68.799 123.261 67.868 122.843 66.994C122.463 66.12 121.969 65.284 121.361 64.486C120.753 63.65 120.183 62.928 119.651 62.32C118.473 64.562 117.295 66.424 116.117 67.906C114.977 69.388 113.723 70.794 112.355 72.124C111.671 72.808 110.949 73.15 110.189 73.15C109.581 73.15 109.087 72.941 108.707 72.523C108.327 72.067 108.137 71.516 108.137 70.87C108.137 70.11 108.403 69.407 108.935 68.761L109.676 67.849C111.766 65.265 113.343 63.137 114.407 61.465C115.053 60.363 115.813 58.9 116.687 57.076C117.561 55.214 118.416 53.295 119.252 51.319C119.974 49.647 121.475 48.811 123.755 48.811C124.819 48.811 125.56 48.906 125.978 49.096C126.396 49.286 126.605 49.59 126.605 50.008C126.605 50.236 126.529 50.597 126.377 51.091C126.225 51.585 126.016 52.079 125.75 52.573C125.066 53.941 124.724 55.1 124.724 56.05C124.724 56.62 124.914 57.247 125.294 57.931C125.712 58.615 126.339 59.47 127.175 60.496C128.391 62.092 129.303 63.46 129.911 64.6C130.557 65.702 130.88 66.918 130.88 68.248C130.88 68.628 130.842 69.16 130.766 69.844C132.628 69.122 134.813 67.203 137.321 64.087C137.777 63.555 138.29 63.289 138.86 63.289C139.354 63.289 139.734 63.517 140 63.973C140.304 64.429 140.456 65.056 140.456 65.854C140.456 67.298 140.095 68.476 139.373 69.388C137.473 71.744 135.649 73.359 133.901 74.233C132.191 75.069 130.063 75.525 127.517 75.601C125.997 76.893 124.192 77.539 122.102 77.539ZM142.836 76.285C140.48 76.285 138.599 75.43 137.193 73.72C135.787 72.01 135.084 69.768 135.084 66.994C135.084 63.954 135.787 61.085 137.193 58.387C138.599 55.651 140.461 53.466 142.779 51.832C145.135 50.16 147.624 49.324 150.246 49.324C151.082 49.324 151.633 49.495 151.899 49.837C152.203 50.141 152.45 50.711 152.64 51.547C153.438 51.395 154.274 51.319 155.148 51.319C157.01 51.319 157.941 51.984 157.941 53.314C157.941 54.112 157.656 56.012 157.086 59.014C156.212 63.384 155.775 66.424 155.775 68.134C155.775 68.704 155.908 69.16 156.174 69.502C156.478 69.844 156.858 70.015 157.314 70.015C158.036 70.015 158.91 69.559 159.936 68.647C160.962 67.697 162.349 66.177 164.097 64.087C164.553 63.555 165.066 63.289 165.636 63.289C166.13 63.289 166.51 63.517 166.776 63.973C167.08 64.429 167.232 65.056 167.232 65.854C167.232 67.374 166.871 68.552 166.149 69.388C164.591 71.326 162.938 72.96 161.19 74.29C159.442 75.62 157.751 76.285 156.117 76.285C154.863 76.285 153.704 75.867 152.64 75.031C151.614 74.157 150.835 72.979 150.303 71.497C148.327 74.689 145.838 76.285 142.836 76.285ZM144.888 70.528C145.724 70.528 146.522 70.034 147.282 69.046C148.042 68.058 148.593 66.747 148.935 65.113L151.044 54.625C149.448 54.663 147.966 55.271 146.598 56.449C145.268 57.589 144.204 59.109 143.406 61.009C142.608 62.909 142.209 64.923 142.209 67.051C142.209 68.229 142.437 69.103 142.893 69.673C143.387 70.243 144.052 70.528 144.888 70.528ZM172.004 54.853C171.928 56.753 171.89 58.235 171.89 59.299C171.89 62.035 172.023 64.182 172.289 65.74C172.593 67.26 173.068 68.362 173.714 69.046C174.398 69.692 175.329 70.015 176.507 70.015C177.115 70.015 177.837 69.825 178.673 69.445C179.509 69.065 180.269 68.571 180.953 67.963C181.371 67.583 181.789 67.393 182.207 67.393C182.663 67.393 183.024 67.659 183.29 68.191C183.594 68.685 183.746 69.293 183.746 70.015C183.746 70.737 183.594 71.44 183.29 72.124C183.024 72.808 182.606 73.378 182.036 73.834C180.06 75.468 177.818 76.285 175.31 76.285C171.7 76.285 169.059 74.784 167.387 71.782C165.715 68.742 164.879 64.79 164.879 59.926C164.879 58.254 164.936 56.563 165.05 54.853H162.827C161.687 54.853 160.908 54.644 160.49 54.226C160.11 53.808 159.92 53.143 159.92 52.231C159.92 50.103 160.775 49.039 162.485 49.039H165.734C166.38 44.859 167.368 41.04 168.698 37.582C170.028 34.124 171.624 31.369 173.486 29.317C175.386 27.265 177.419 26.239 179.585 26.239C181.181 26.239 182.435 26.942 183.347 28.348C184.259 29.754 184.715 31.521 184.715 33.649C184.715 39.539 182.245 44.669 177.305 49.039H183.689C184.297 49.039 184.734 49.172 185 49.438C185.266 49.704 185.399 50.198 185.399 50.92C185.399 53.542 183.252 54.853 178.958 54.853H172.004ZM178.046 31.711C177.476 31.711 176.83 32.433 176.108 33.877C175.424 35.283 174.759 37.259 174.113 39.805C173.505 42.313 172.992 45.106 172.574 48.184C174.816 46.246 176.488 44.08 177.59 41.686C178.73 39.254 179.3 37.05 179.3 35.074C179.3 32.832 178.882 31.711 178.046 31.711Z" fill="black"/>
                    <path d="M18.639 74.456C13.585 74.456 9.538 73.506 6.498 71.606C3.458 69.668 1.938 66.723 1.938 62.771C1.938 60.681 2.299 59.085 3.021 57.983C3.743 56.881 4.807 56.33 6.213 56.33C7.239 56.33 8.075 56.596 8.721 57.128C9.367 57.66 9.69 58.344 9.69 59.18C9.69 59.94 9.633 60.605 9.519 61.175C9.519 61.327 9.481 61.593 9.405 61.973C9.367 62.353 9.348 62.752 9.348 63.17C9.348 64.88 10.203 66.153 11.913 66.989C13.661 67.825 16.093 68.243 19.209 68.243C22.439 68.243 24.966 67.673 26.79 66.533C28.614 65.355 29.526 63.721 29.526 61.631C29.526 60.339 29.108 59.237 28.272 58.325C27.436 57.375 26.391 56.596 25.137 55.988C23.883 55.342 22.116 54.563 19.836 53.651C16.91 52.511 14.516 51.428 12.654 50.402C10.83 49.376 9.253 47.989 7.923 46.241C6.631 44.455 5.985 42.251 5.985 39.629C5.985 36.893 6.707 34.461 8.151 32.333C9.633 30.205 11.742 28.552 14.478 27.374C17.252 26.196 20.501 25.607 24.225 25.607C26.999 25.607 29.545 26.025 31.863 26.861C34.181 27.659 36.024 28.894 37.392 30.566C38.798 32.238 39.501 34.29 39.501 36.722C39.501 39.116 39.14 40.921 38.418 42.137C37.696 43.353 36.632 43.961 35.226 43.961C34.238 43.961 33.402 43.657 32.718 43.049C32.072 42.441 31.749 41.719 31.749 40.883C31.749 40.161 31.806 39.496 31.92 38.888C32.034 37.748 32.091 37.026 32.091 36.722C32.091 35.126 31.312 33.91 29.754 33.074C28.196 32.238 26.258 31.82 23.94 31.82C20.672 31.82 18.164 32.428 16.416 33.644C14.706 34.822 13.851 36.494 13.851 38.66C13.851 40.104 14.288 41.339 15.162 42.365C16.074 43.391 17.195 44.246 18.525 44.93C19.855 45.614 21.717 46.431 24.111 47.381C26.999 48.559 29.317 49.623 31.065 50.573C32.813 51.523 34.295 52.815 35.511 54.449C36.765 56.083 37.392 58.097 37.392 60.491C37.392 64.975 35.682 68.433 32.262 70.865C28.88 73.259 24.339 74.456 18.639 74.456ZM49.4462 43.676C47.8502 43.676 46.6532 43.315 45.8552 42.593C45.0572 41.833 44.6582 40.788 44.6582 39.458C44.6582 38.128 45.1712 37.026 46.1972 36.152C47.2612 35.24 48.5722 34.784 50.1302 34.784C51.5362 34.784 52.6762 35.126 53.5502 35.81C54.4242 36.494 54.8612 37.463 54.8612 38.717C54.8612 40.237 54.3672 41.453 53.3792 42.365C52.3912 43.239 51.0802 43.676 49.4462 43.676ZM48.9902 74.285C46.5202 74.285 44.7152 73.411 43.5752 71.663C42.4732 69.915 41.9222 67.597 41.9222 64.709C41.9222 62.999 42.1312 60.814 42.5492 58.154C43.0052 55.456 43.5752 52.948 44.2592 50.63C44.6012 49.414 45.0572 48.578 45.6272 48.122C46.1972 47.666 47.1092 47.438 48.3632 47.438C50.3012 47.438 51.2702 48.084 51.2702 49.376C51.2702 50.326 50.9092 52.53 50.1872 55.988C49.2752 60.168 48.8192 62.999 48.8192 64.481C48.8192 65.621 48.9712 66.495 49.2752 67.103C49.5792 67.711 50.0922 68.015 50.8142 68.015C51.4982 68.015 52.3532 67.54 53.3792 66.59C54.4052 65.64 55.7732 64.139 57.4832 62.087C57.9392 61.555 58.4522 61.289 59.0222 61.289C59.5162 61.289 59.8962 61.517 60.1622 61.973C60.4662 62.429 60.6182 63.056 60.6182 63.854C60.6182 65.374 60.2572 66.552 59.5352 67.388C55.7732 71.986 52.2582 74.285 48.9902 74.285ZM85.1905 61.403C85.6845 61.403 86.0645 61.65 86.3305 62.144C86.6345 62.6 86.7865 63.189 86.7865 63.911C86.7865 64.785 86.6535 65.469 86.3875 65.963C86.1215 66.457 85.7035 66.894 85.1335 67.274L74.1895 74.627C72.7455 82.493 70.8455 88.668 68.4895 93.152C66.1715 97.674 63.2075 99.935 59.5975 99.935C57.6595 99.935 56.0825 99.327 54.8665 98.111C53.6505 96.933 53.0425 95.375 53.0425 93.437C53.0425 91.651 53.4415 89.827 54.2395 87.965C55.0755 86.103 56.5955 83.956 58.7995 81.524C61.0415 79.13 64.1955 76.375 68.2615 73.259L68.4325 71.948C68.6985 70.542 69.0025 68.528 69.3445 65.906C68.5845 68.642 67.5205 70.732 66.1525 72.176C64.7845 73.582 63.3405 74.285 61.8205 74.285C60.1105 74.285 58.7045 73.506 57.6025 71.948C56.5385 70.352 56.0065 68.376 56.0065 66.02C56.0065 63.17 56.1965 60.567 56.5765 58.211C56.9565 55.817 57.5835 53.29 58.4575 50.63C58.8375 49.49 59.3695 48.673 60.0535 48.179C60.7375 47.685 61.8205 47.438 63.3025 47.438C64.1385 47.438 64.7085 47.571 65.0125 47.837C65.3545 48.103 65.5255 48.502 65.5255 49.034C65.5255 49.338 65.3165 50.364 64.8985 52.112C64.5185 53.518 64.2145 54.791 63.9865 55.931C63.6825 57.489 63.4165 58.99 63.1885 60.434C62.9605 61.84 62.8465 62.999 62.8465 63.911C62.8465 65.355 63.2455 66.077 64.0435 66.077C64.6135 66.077 65.3165 65.507 66.1525 64.367C67.0265 63.227 67.9385 61.498 68.8885 59.18C69.8765 56.862 70.8265 54.012 71.7385 50.63C72.0425 49.49 72.4985 48.673 73.1065 48.179C73.7525 47.685 74.7025 47.438 75.9565 47.438C76.8305 47.438 77.4385 47.552 77.7805 47.78C78.1225 48.008 78.2935 48.388 78.2935 48.92C78.2935 49.87 77.7995 53.138 76.8115 58.724L75.3295 67.901C78.2555 65.697 81.1055 63.683 83.8795 61.859C84.3735 61.555 84.8105 61.403 85.1905 61.403ZM60.2245 94.406C61.1745 94.406 62.2385 93.304 63.4165 91.1C64.5945 88.896 65.7725 85.229 66.9505 80.099C64.0245 82.569 61.8965 84.811 60.5665 86.825C59.2745 88.877 58.6285 90.663 58.6285 92.183C58.6285 92.829 58.7425 93.361 58.9705 93.779C59.2365 94.197 59.6545 94.406 60.2245 94.406ZM89.7363 74.285C87.3803 74.285 85.4993 73.43 84.0933 71.72C82.6873 70.01 81.9843 67.768 81.9843 64.994C81.9843 61.954 82.6873 59.085 84.0933 56.387C85.4993 53.651 87.3613 51.466 89.6793 49.832C92.0353 48.16 94.5243 47.324 97.1463 47.324C97.9823 47.324 98.5333 47.495 98.7993 47.837C99.1033 48.141 99.3503 48.711 99.5403 49.547C100.338 49.395 101.174 49.319 102.048 49.319C103.91 49.319 104.841 49.984 104.841 51.314C104.841 52.112 104.556 54.012 103.986 57.014C103.112 61.384 102.675 64.424 102.675 66.134C102.675 66.704 102.808 67.16 103.074 67.502C103.378 67.844 103.758 68.015 104.214 68.015C104.936 68.015 105.81 67.559 106.836 66.647C107.862 65.697 109.249 64.177 110.997 62.087C111.453 61.555 111.966 61.289 112.536 61.289C113.03 61.289 113.41 61.517 113.676 61.973C113.98 62.429 114.132 63.056 114.132 63.854C114.132 65.374 113.771 66.552 113.049 67.388C111.491 69.326 109.838 70.96 108.09 72.29C106.342 73.62 104.651 74.285 103.017 74.285C101.763 74.285 100.604 73.867 99.5403 73.031C98.5143 72.157 97.7353 70.979 97.2033 69.497C95.2273 72.689 92.7383 74.285 89.7363 74.285ZM91.7883 68.528C92.6243 68.528 93.4223 68.034 94.1823 67.046C94.9423 66.058 95.4933 64.747 95.8353 63.113L97.9443 52.625C96.3483 52.663 94.8663 53.271 93.4983 54.449C92.1683 55.589 91.1043 57.109 90.3063 59.009C89.5083 60.909 89.1093 62.923 89.1093 65.051C89.1093 66.229 89.3373 67.103 89.7933 67.673C90.2873 68.243 90.9523 68.528 91.7883 68.528ZM120.102 75.539C118.126 75.539 116.606 75.083 115.542 74.171C114.516 73.259 114.003 72.233 114.003 71.093C114.003 70.105 114.364 69.25 115.086 68.528C115.808 67.806 116.872 67.445 118.278 67.445C118.772 67.445 119.342 67.502 119.988 67.616C120.672 67.692 121.185 67.749 121.527 67.787C121.489 66.799 121.261 65.868 120.843 64.994C120.463 64.12 119.969 63.284 119.361 62.486C118.753 61.65 118.183 60.928 117.651 60.32C116.473 62.562 115.295 64.424 114.117 65.906C112.977 67.388 111.723 68.794 110.355 70.124C109.671 70.808 108.949 71.15 108.189 71.15C107.581 71.15 107.087 70.941 106.707 70.523C106.327 70.067 106.137 69.516 106.137 68.87C106.137 68.11 106.403 67.407 106.935 66.761L107.676 65.849C109.766 63.265 111.343 61.137 112.407 59.465C113.053 58.363 113.813 56.9 114.687 55.076C115.561 53.214 116.416 51.295 117.252 49.319C117.974 47.647 119.475 46.811 121.755 46.811C122.819 46.811 123.56 46.906 123.978 47.096C124.396 47.286 124.605 47.59 124.605 48.008C124.605 48.236 124.529 48.597 124.377 49.091C124.225 49.585 124.016 50.079 123.75 50.573C123.066 51.941 122.724 53.1 122.724 54.05C122.724 54.62 122.914 55.247 123.294 55.931C123.712 56.615 124.339 57.47 125.175 58.496C126.391 60.092 127.303 61.46 127.911 62.6C128.557 63.702 128.88 64.918 128.88 66.248C128.88 66.628 128.842 67.16 128.766 67.844C130.628 67.122 132.813 65.203 135.321 62.087C135.777 61.555 136.29 61.289 136.86 61.289C137.354 61.289 137.734 61.517 138 61.973C138.304 62.429 138.456 63.056 138.456 63.854C138.456 65.298 138.095 66.476 137.373 67.388C135.473 69.744 133.649 71.359 131.901 72.233C130.191 73.069 128.063 73.525 125.517 73.601C123.997 74.893 122.192 75.539 120.102 75.539ZM140.836 74.285C138.48 74.285 136.599 73.43 135.193 71.72C133.787 70.01 133.084 67.768 133.084 64.994C133.084 61.954 133.787 59.085 135.193 56.387C136.599 53.651 138.461 51.466 140.779 49.832C143.135 48.16 145.624 47.324 148.246 47.324C149.082 47.324 149.633 47.495 149.899 47.837C150.203 48.141 150.45 48.711 150.64 49.547C151.438 49.395 152.274 49.319 153.148 49.319C155.01 49.319 155.941 49.984 155.941 51.314C155.941 52.112 155.656 54.012 155.086 57.014C154.212 61.384 153.775 64.424 153.775 66.134C153.775 66.704 153.908 67.16 154.174 67.502C154.478 67.844 154.858 68.015 155.314 68.015C156.036 68.015 156.91 67.559 157.936 66.647C158.962 65.697 160.349 64.177 162.097 62.087C162.553 61.555 163.066 61.289 163.636 61.289C164.13 61.289 164.51 61.517 164.776 61.973C165.08 62.429 165.232 63.056 165.232 63.854C165.232 65.374 164.871 66.552 164.149 67.388C162.591 69.326 160.938 70.96 159.19 72.29C157.442 73.62 155.751 74.285 154.117 74.285C152.863 74.285 151.704 73.867 150.64 73.031C149.614 72.157 148.835 70.979 148.303 69.497C146.327 72.689 143.838 74.285 140.836 74.285ZM142.888 68.528C143.724 68.528 144.522 68.034 145.282 67.046C146.042 66.058 146.593 64.747 146.935 63.113L149.044 52.625C147.448 52.663 145.966 53.271 144.598 54.449C143.268 55.589 142.204 57.109 141.406 59.009C140.608 60.909 140.209 62.923 140.209 65.051C140.209 66.229 140.437 67.103 140.893 67.673C141.387 68.243 142.052 68.528 142.888 68.528ZM170.004 52.853C169.928 54.753 169.89 56.235 169.89 57.299C169.89 60.035 170.023 62.182 170.289 63.74C170.593 65.26 171.068 66.362 171.714 67.046C172.398 67.692 173.329 68.015 174.507 68.015C175.115 68.015 175.837 67.825 176.673 67.445C177.509 67.065 178.269 66.571 178.953 65.963C179.371 65.583 179.789 65.393 180.207 65.393C180.663 65.393 181.024 65.659 181.29 66.191C181.594 66.685 181.746 67.293 181.746 68.015C181.746 68.737 181.594 69.44 181.29 70.124C181.024 70.808 180.606 71.378 180.036 71.834C178.06 73.468 175.818 74.285 173.31 74.285C169.7 74.285 167.059 72.784 165.387 69.782C163.715 66.742 162.879 62.79 162.879 57.926C162.879 56.254 162.936 54.563 163.05 52.853H160.827C159.687 52.853 158.908 52.644 158.49 52.226C158.11 51.808 157.92 51.143 157.92 50.231C157.92 48.103 158.775 47.039 160.485 47.039H163.734C164.38 42.859 165.368 39.04 166.698 35.582C168.028 32.124 169.624 29.369 171.486 27.317C173.386 25.265 175.419 24.239 177.585 24.239C179.181 24.239 180.435 24.942 181.347 26.348C182.259 27.754 182.715 29.521 182.715 31.649C182.715 37.539 180.245 42.669 175.305 47.039H181.689C182.297 47.039 182.734 47.172 183 47.438C183.266 47.704 183.399 48.198 183.399 48.92C183.399 51.542 181.252 52.853 176.958 52.853H170.004ZM176.046 29.711C175.476 29.711 174.83 30.433 174.108 31.877C173.424 33.283 172.759 35.259 172.113 37.805C171.505 40.313 170.992 43.106 170.574 46.184C172.816 44.246 174.488 42.08 175.59 39.686C176.73 37.254 177.3 35.05 177.3 33.074C177.3 30.832 176.882 29.711 176.046 29.711Z" fill="#FFE600"/>
                </svg>
            </a>
        </nav>

        <div class="container" style="padding-left: 10%; padding-right: 10%; margin-top:50px; margin-bottom: 200px; display:none;">

<div class="card hoverable">
    <div class="card-content" id="loader" style="display:none;">
        <center style="margin-top:100px; margin-bottom: 100px;">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-green-only">
                <div class="circle-clipper left">
                <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
                </div><div class="circle-clipper right">
                <div class="circle"></div>
                </div>
            </div>
        </div>
        </center>
    </div>
    <div class="card-content" id="withContent">
        <p style="text-align: center; font-size:25pt;">Welcome to Siyasat Manage</p>
        <p style="text-align: center; font-size:18pt;">Please login with an admin account to proceed</p>
        <br>
        <form>
            <div class="input-field">
                <input type="text" id="username">
                <label for="username">Username</label>
            </div>
            <div class="input-field">
                <input type="password" id="password">
                <label for="password">Password</label>
            </div>
        </form>

        <div id="messageBox" style="display:none;">
            <p id="messageBoxContent">Some text here</p>
        </div>    

    </div>
    <div class="card-action" id="loginButton">
        <a href="#!">Login</a>
    </div>
</div>


</div>


    </body>
</html>
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/materialize.min.js"></script>
<script>
const ui = {
    message: {
        show(msg){
            $("#messageBoxContent").html(msg);
            $("#messageBox").slideDown();        
        }
    },

    input: {
        disable(){
            $("input").prop("disabled", true);
            $("#withContent").hide();
            $(".card-action").hide();
            $(".btn").fadeOut();
            $("#loader").fadeIn();
        },
        enable(){
            $("input").prop("disabled", false);
            $("#loader").hide();
            $(".card-action").fadeIn();
            $("#withContent").fadeIn();
            $(".btn").fadeIn();
        }
    }
};

$(document).ready(()=>{
    $(".container").slideDown();
});

$("#loginButton").click(()=>{
    ui.input.disable();
    var u = $("#username").val();
    var p = $("#password").val();

    if(!u){
        ui.input.enable();
        ui.message.show("Username is Required");
    } else {
        if(!p){
            ui.input.enable();
            ui.message.show("Password is Requied");
        } else {

            $.ajax({
                type:"POST",
                url:"./loginprocess.php",
                data: {
                    username:u,
                    password:p
                },
                success: res=>{
                    console.log(res);
                    res = JSON.parse(res);
                    if(res.result == true){
                        window.location.replace("dashboard.php");
                    } else {
                        ui.input.enable();
                        ui.message.show(res.message);
                    }
                }
            }).fail(()=>{
                ui.input.enable();
                ui.message.show("An error occurred");
            });

        }
    }

});
</script>