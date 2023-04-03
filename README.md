# 📏 Mathematics E-Learning Platform

# ℹ️ Project Overview

We want to create a mathematics primary school platform where students can discover new study features & materials, and help professors & teachers to integrate technologies into their teaching methodologies, and track their students’ learning path.

# 📦 Deliverables

- Student’s platform: React App
- Teacher’s platform: Laravel App

# 👨‍💻 Technology Stack

- Front-End Technologies:
    - ReactJS
    - TailwindCSS
- Back-End Technologies:
    - Laravel
    - Fireship

# ✏️ Prototyping

- Use Case Diagram : [shorturl.at/gwQ89](http://shorturl.at/gwQ89)
- Class Diagram : [shorturl.at/bjAE3](http://shorturl.at/bjAE3)

# 📂 Repository Use Requirements

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
            
        3. Install the app's layout dependencies
            
            ```php
            npm install
            ```
            
        4. Run two simultaneous command line with the following commands
            
            ```php
            npm run dev
            php artisan serve
            ```