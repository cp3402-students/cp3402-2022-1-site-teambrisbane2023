# Deployment and Development Workflow


Recommended development workflow: - 

1. Download and install <a href="https://www.apachefriends.org/">XAMPP</a> or <a href="https://www.mamp.info/en/mamp/mac/">MAMP</a>

2. Set up a database server in your local environment by accessing localhost/phpmyadmin. Next, establish a database named after your website and import the database into the newly created one. Ensure that the current website's SQL is saved as 'project.sql' located in <a href="https://github.com/cp3402-students/cp3402-2022-1-site-teambrisbane2023">GitHub repository.</a>

3. Due to GitHub's restrictions on uploading large files, we've chosen to upload the file to Google Drive instead. Here is the complete website in its entirety.<a href="https://drive.google.com/file/d/1yTMgs9IGKYnFOw9PI_X0WhrwUsZXlija/view?usp=share_link">Click here</a> . 

4. Retrieve the folder by cloning or downloading it from the <a href="https://github.com/cp3402-students/cp3402-2022-1-site-teambrisbane2023.git">GitHub</a> repository named 'miri-piri-cleaning' to your desktop. If you've downloaded the folder, be sure to unzip it. This folder represents the child theme for the complete website.

5. For the purpose of feature development or making modifications to existing features, establish a fresh branch within the repository. Make sure to name the branch in a manner that corresponds to the user for effective version control. Additionally, any new developments, edits, or updates should be documented on the Trello board, utilizing the names from the respective cards. The Trello board serves as an efficient project management tool and maintains a comprehensive history of the project's progress.

6. Within the suitable Integrated Development Environment (IDE), tailor the theme according to requirements and generate appropriate version control commits. Subsequently, push the finalized work to the repository. Initiate pertinent pull requests directed towards the main branch. It is imperative to ensure thorough testing of pull requests before they are merged into the main branch.

7. After the main branch has been merged and synchronized with the alterations, the repository can be fetched to the local environment. Subsequently, it can be compressed into a zip file and uploaded to the staging site through appearance/theme/add new. The theme should then be activated for testing purposes on the staging website. Once successful testing has been confirmed on the staging website, the theme's zip folder can be transferred and uploaded to the production site.

