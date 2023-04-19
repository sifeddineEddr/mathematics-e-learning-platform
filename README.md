# 📏 Mathematics E-Learning Platform

# ℹ️ Project Overview

We want to create a mathematics primary school platform where students can discover new study features & materials, and help professors & teachers to integrate technologies into their teaching methodologies, and track their students’ learning path.

# 📦 Deliverables

- Student’s platform: React App
- Teacher’s platform: Laravel App

# 👨‍💻 Technology Stack & Packages

| Front-End Technologies | Back-End Technologies |
| --- | --- |
| ReactJS | Laravel |
| Redux Toolkit | Laravel Jetstream |
| React Router Dom | Laravel Excel |
| Axios | Laravel Passport |
| TailwindCSS | MongoDB |
| Flowbite |  |

# ✏️ Prototyping

- Use Case Diagram:
    
    ![UseCaseDiagram.svg](%F0%9F%93%8F%20Mathematics%20E-Learning%20Platform%20ebf0745a138047cd8f2f6a7476d80822/UseCaseDiagram.svg)
    
- Class Diagram:
    
    ![ClassDiagram.jpg](%F0%9F%93%8F%20Mathematics%20E-Learning%20Platform%20ebf0745a138047cd8f2f6a7476d80822/ClassDiagram.jpg)
    

# 📋 Repository Use Requirements

1. Clone the repository on your local machine.
    
    ```php
    git clone https://github.com/sifeddineEddr/mathematics-e-learning-platform.git
    ```
    
2. Navigate into the local repository, and run the following commands to install the dependencies and set up the project.
    1. Laravel Project
        1. Add composer
            
            ```php
            cd mathematics-e-learning-platform/teacher-platform
            composer install
            ```
            
        2. Set up the environment variables and generate the encryption key
            
            ```php
            cp .env.example .env
            php artisan key:generate
            ```
            
        3. Install the app's layout dependencies and their build
            
            ```php
            npm install
            npm run build
            ```
            
        4. Configure your **`tailwind.config.js`** file
            
            ```jsx
            /** @type {import('tailwindcss').Config} */
            module.exports = {
                content: [
                    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
                    "./vendor/laravel/jetstream/**/*.blade.php",
                    "./storage/framework/views/*.php",
                    "./resources/views/**/*.blade.php",
                    "./node_modules/flowbite/**/*.js",
                ],
            
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                        },
                        colors: {
                            "brand-red": "#C00005",
                            "brand-light-ish-brown": "#FAF2EF",
                        },
                    },
                },
            
                plugins: [
                    require("@tailwindcss/forms"),
                    require("@tailwindcss/typography"),
                    require("flowbite/plugin"),
                ],
            };
            ```
            
        5. Configure your `resources/js/app**.js`** file
            
            ```jsx
            import './bootstrap';
            
            import Alpine from 'alpinejs';
            import focus from '@alpinejs/focus';
            import 'flowbite';
            window.Alpine = Alpine;
            
            Alpine.plugin(focus);
            
            Alpine.start();
            ```
            
        6. Create the database tables
            
            ```php
            php artisan migrate
            ```
            
        7. Run two simultaneous command lines with the following commands
            
            ```php
            npm run dev
            php artisan serve
            ```
            

# 📂 React App Folder Structure

1. **`assets`**: This folder contains all images, CSS files, and SVG files that are used in the project.
2. **`components`**: This folder contains shared components that are used across multiple pages.
3. **`data`**: This folder contains any data files that are used in the project.
4. **`hooks`**: This folder contains any custom hooks that are used in the project.
5. **`layout`**: This folder contains the shared UI design of the project that are used across multiple pages and are not page-specific.
6. **`libraries`**: This folder contains any third-party libraries used in the project.
7. **`pages`**: This folder contains all pages and their non-shared components and hooks. This includes any page-specific components that are not shared across multiple pages.
8. **`redux`**: This folder contains any files related to Redux, such as actions, reducers, and the store.
9. **`routes`**: This folder contains all of the routes used in the project.
10. **`services`**: This folder contains any files related to API communication.
11. **`utils`**: This folder contains any shared simple scripts that are used in the project.