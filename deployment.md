# Deployment and Development Workflow


Recommended development workflow: - 

1. Download and install <a href="https://www.apachefriends.org/">XAMPP</a> or <a href="https://www.mamp.info/en/mamp/mac/">MAMP</a>

2. Set up a database server in your local environment by accessing localhost/phpmyadmin. Next, establish a database named after your website and import the database into the newly created one. Ensure that the current website's SQL is saved as 'project.sql' located in <a href="https://github.com/cp3402-students/cp3402-2022-1-site-teambrisbane2023">GitHub repository.</a>

3. Due to GitHub's restrictions on uploading large files, we've chosen to upload the file to Google Drive instead. Here is the complete website in its entirety.<a href="https://drive.google.com/file/d/1TOoFkTJ2DF2K_DZ_1ayyq_ffJ6C52OfR/view?usp=sharing">Click here</a> .
   
5. Use [All-in-One WP Migration](https://wordpress.org/plugins/all-in-one-wp-migration/) plugin for restoring the backup. The same plugin was used for backup so this will be better.

7. Retrieve the folder by cloning or downloading it from the <a href="https://github.com/cp3402-students/cp3402-2022-1-site-teambrisbane2023.git">GitHub</a> repository named 'miri-piri-cleaning' to your desktop. If you've downloaded the folder, be sure to unzip it. This folder represents the child theme for the complete website.

8. For the purpose of feature development or making modifications to existing features, establish a fresh branch within the repository. Make sure to name the branch in a manner that corresponds to the user for effective version control. Additionally, any new developments, edits, or updates should be documented on the Trello board, utilizing the names from the respective cards. The Trello board serves as an efficient project management tool and maintains a comprehensive history of the project's progress.

9. Within the suitable Integrated Development Environment (IDE), tailor the theme according to requirements and generate appropriate version control commits. Subsequently, push the finalized work to the repository. Initiate pertinent pull requests directed towards the main branch. It is imperative to ensure thorough testing of pull requests before they are merged into the main branch.

10. After the main branch has been merged and synchronized with the alterations, the repository can be fetched to the local environment. Subsequently, it can be compressed into a zip file and uploaded to the staging site through appearance/theme/add new. The theme should then be activated for testing purposes on the staging website. Once successful testing has been confirmed on the staging website, the theme's zip folder can be transferred and uploaded to the production site.

# Web Hosting

We have opted for the web hosting services of <a href="https://www.dreamhost.com/">Dreamhost</a> due to its provision of the following features:
- Unlimited website hosting
- Simple domain addition
- Unlimited data traffic
- Limitless bandwidth usage
- 30GB SSD storage capacity
- Easy one-click installation for WordPress
- Complimentary SSL certificate
- Continuous 24/7 customer support

We employ this service for both the <a href="https://ramtha3dreampress.stage.site">Staging Site</a> and the <a href="https://ramtha3.dream.press">Production Site</a>. The staging server is secured with a password to avoid search engine confusion with the live site. To access the staging server, the necessary username and password details can be found in [a2.html](a2.html).

![Dreamhost](https://thumbs2.imgbox.com/de/d2/mL2rshUg_t.png)

# Version Control

- Our version control is overseen through [Github](https://github.com/cp3402-students/cp3402-2022-1-site-teambrisbane2023).
- Version control involves comparing previous and current versions of code or files to monitor changes introduced by each repository member.
- Using GitHub Desktop, we transmitted our commits to GitHub. To maintain repository accuracy, we continually updated our files after uploading them.

We used GitHub for version control because GitHub simplifies version control and collaboration, allowing developers to work on features separately, merge changes seamlessly, and maintain a clear history. It combines issue tracking, code reviews, and automated testing through CI tools. GitHub's community engagement fosters openness and accessibility, while its security features ensure controlled access and management of projects.

# Project Management

To enhance communication and task coordination, we utilized Slack Channel, GitHub repository, and Trello board:

- [GitHub Repository](https://github.com/cp3402-students/cp3402-2022-1-site-teambrisbane2023.git): This served as a collaborative platform for project development and monitoring changes made by team members to project files.

- [Trello Board](https://trello.com/b/VNpcLBjb/teambrisbane-cp3402): It facilitated ideation, planning, and organized team collaboration in a productive manner.

- [Slack Channel](https://join.slack.com/t/jcu-mxs2406/shared_invite/zt-21ab4cwuo-Pgh9gn1LQ~LGMUPtIZHvKA): By integrating GitHub repository and Trello board with Slack, automatic notifications and updates were channelled, ensuring visibility into ongoing work across the team.
