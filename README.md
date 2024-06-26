## Website Assesst

Instructions for Deployment.

Begin by cloning the website repository using Git:

git clone <https://github.com/SamuelMakoholi/WebsiteAssessment.git>

Install Dependencies:
Once the repository is cloned, navigate to the project directory and install the required dependencies using Node Package Manager (npm):

cd <project_directory>
npm install
This command will install all the necessary packages listed in the project's package.json file.

Run Development Server:
After the dependencies are installed, start the Laravel development server to access the website locally:

npm run dev
This will typically launch the website on your local machine at a default URL (e.g., http://localhost:8000). You can then access the site in your web browser for testing and development purposes.

Database Migrations:

php artisan migrate

Create User Account:
Once the development server is running and migrations are complete, you can create a user account at http://localhost:8000/register. Upon successful account creation, you'll be redirected to the admin dashboard.

Content Management:
The admin dashboard typically provides a sidebar menu with links to various sections for adding and managing content. Each link will guide you to a dedicated page where you can create, edit, and publish content for the website.

Support:

If you encounter any difficulties during the installation process or have further questions, you can reach out for support through the following channels:

Email: samuelmakoholi@gmail.com
Phone: 0776675208
Additional Considerations:
