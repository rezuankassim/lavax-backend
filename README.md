<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->

<a name="readme-top"></a>

<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Don't forget to give the project a star!
*** Thanks again! Now go create something AMAZING! :D
-->

<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->

[![LinkedIn][linkedin-shield]][linkedin-url]

<!-- PROJECT LOGO -->
<br />
<div align="center">

<h3 align="center">Lavax Backend</h3>

  <p align="center">
    This is the backend project for technical assessment for Lavax.
    <br />
    <a href="https://github.com/rezuankassim/lavax-backend#about-the-project"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a target="_blank" href="https://lavax-backend.rezuankassim.com">View Demo</a>
    ·
    <a href="https://github.com/rezuankassim/lavax-backend/issues">Report Bug</a>
    ·
    <a href="https://github.com/rezuankassim/lavax-backend/issues">Request Feature</a>
  </p>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>

<!-- ABOUT THE PROJECT -->

## About The Project

A backend admin panel for an ecommerce website to create the products and authentication.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

### Built With

- [![Laravel][laravel.com]][laravel-url]
- [Laravel Nova](https://nova.laravel.com)

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- GETTING STARTED -->

## Getting Started

To get a local copy up and running follow these simple example steps.

### Prerequisites

This is an example of how to list things you need to use the software and how to install them.

- composer
  ```sh
  brew install composer
  ```
- Laravel Nova
  Find out how to install Laravel Nova using composer [here](https://nova.laravel.com/docs/4.0/installation.html#installing-nova-via-composer)

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/rezuankassim/lavax-backend
   ```
2. Install Composer packages
   ```sh
   composer install
   ```
   There will an error if you did not install set Laravel Nova credentials in composer, I will provide a free license key upon requested only for the reviewer of the technical assessment.
3. Copy `.env.example` to a newly created `.env`

   ```sh
   cp .env.example .env
   ```

   ```.env
   FRONTEND_URL=<PUT FRONTEND URL HERE EG. http://localhost:3000>
   ```

   Please host your frontend and backend within the same domain due the authentication is using cookies, eg. backend url is ecommerce.com, frontend url is app.ecommerce.com

   If you are hosting your frontend in app.example.com and your backend in backend.example.com, you need to add these in `.env`

   ```.env
   SESSION_DOMAIN=.example.com
   SANCTUM_STATEFUL_DOMAINS=app.example.com
   ```

4. Serve the application

   ```sh
   php artisan serve
   ```

5. Migration and create Nova user

   ```sh
   php artisan migrate
   ...
   php artisan nova:user
   ```

6. Login to Nova with credentials created `/nova/login`

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- USAGE EXAMPLES -->

## Usage

Will be demonstrate the usage of the projects during the showcase for the technical assessment with Lavax.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Contact

Your Name - [@KassimRezuan](https://twitter.com/KassimRezuan) - rezuankassim@hotmail.com

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->

[contributors-shield]: https://img.shields.io/github/contributors/github_username/repo_name.svg?style=for-the-badge
[contributors-url]: https://github.com/github_username/repo_name/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/github_username/repo_name.svg?style=for-the-badge
[forks-url]: https://github.com/github_username/repo_name/network/members
[stars-shield]: https://img.shields.io/github/stars/github_username/repo_name.svg?style=for-the-badge
[stars-url]: https://github.com/github_username/repo_name/stargazers
[issues-shield]: https://img.shields.io/github/issues/github_username/repo_name.svg?style=for-the-badge
[issues-url]: https://github.com/github_username/repo_name/issues
[license-shield]: https://img.shields.io/github/license/github_username/repo_name.svg?style=for-the-badge
[license-url]: https://github.com/github_username/repo_name/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/linkedin_username
[product-screenshot]: images/screenshot.png
[next.js]: https://img.shields.io/badge/next.js-000000?style=for-the-badge&logo=nextdotjs&logoColor=white
[next-url]: https://nextjs.org/
[react.js]: https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[react-url]: https://reactjs.org/
[vue.js]: https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[vue-url]: https://vuejs.org/
[angular.io]: https://img.shields.io/badge/Angular-DD0031?style=for-the-badge&logo=angular&logoColor=white
[angular-url]: https://angular.io/
[svelte.dev]: https://img.shields.io/badge/Svelte-4A4A55?style=for-the-badge&logo=svelte&logoColor=FF3E00
[svelte-url]: https://svelte.dev/
[laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[laravel-url]: https://laravel.com
[bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[bootstrap-url]: https://getbootstrap.com
[jquery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[jquery-url]: https://jquery.com
