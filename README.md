# Legal Aspire Solicitors - How I Built The Site

I created this project so I can share, explain and showcase the process I take when it comes to creating a custom and bespoke site. In this case, I created a custom WordPress site for a fictional law firm. I used WordPress because it is versatile CMS and the main goal was to allow authorised users to log in and add their own content. Also, building a custom theme from scratch gives me full control of how the site will look.

The stages I follow when creating a custom site are researching, designing, development, testing and deployment.

## Research

In the research phase, I searched and had a look at other law firm sites to see how they were built and structured. This gave me the chance to take notes on what content, colors, fonts, images would be appropriate for when designing and developing this site.

To better understand what type of content should go on the site I put myself in the shoes of a user who wanted legal advice from a law firm. The typical things a user would search for are the types of services offered, the solicitors & what law they specialise in, case studies etc. My job was then to prioritise which content was important so I can display them on the homepage. In the end, I decided that the homepage should have a hero carousel as a way to introduce the site to users, a section that displays the types of services offered by the firm, a section that shows the solicitors and a 3 column card showing the latest news at the firm.

Aesthetically, most law firm sites often look 'corporate' and 'serious'. I took this into consideration when deciding which fonts and colors to use in the design phase. Doing this ensured that the fonts and colors used were appropriate for a law firm site.

## Design

Now that I have a good understanding of how a law firm site should look and be structured it was now time to move onto the design phase of the project. I created a basic wireframe of how the homepage should look in Adobe XD as this would help me to develop the homepage rather than jumping into the development phase with no mockup or design.

I also decided on the navigation structure of the site. Researching the site architecture of other law firm sites and seeing what the most important pages were helped inform my decision when creating the site map.

The research phase helped me to choose which colors and fonts to use. I used a color psychology chart to determine what colors would work best. The site uses a combination of navy blue, black, white and light grey. As the site was for a law firm, I wanted the site to represent justice, trust and formality.

I wanted the site to have a primary and secondary font. The primary font will be used for the logo & the header whilst representing the branding of the law firm. As a result, I found a font called 'Julius Sans One'. The secondary font will be used on things like paragraphs. I chose a font called 'Jost' as it fitted my vision of it looking modern and being easy to read.

I also used Pexels and Adobe Stock Images to find high quality and professional images to use on the site.

## Develop

During the research phase, I used a Chrome extension called Wappalzyer to see how other law firm sites were built. I noticed that the majority of the sites used WordPress. I took this into consideration and I decided that the site will be custom-built using WordPress. The reason why WordPress was used to develop the site is that it is a CMS and this site will be ideal for users i.e. employees of a fictional law firm to add and edit their own content such as new news, services, case studies, locations, solicitors etc.

I used Local By Flywheel for my local development environment as it provided me with a new database and a fresh WordPress installation to allow me to start building the site from scratch.

I also used a popular WordPress starter theme called Underscores which contains minimal CSS which was enough for me to get started as it allows me to have full control and freedom to style a newly built site from scratch. It can also be installed with Sass through NPM allowing me to use the various features that Sass provides e.g. mixins, nesting, variables etc. The Sass folder is split into 7 sub-folders e.g. abstracts, base, components, generic, layouts, plugins, utilities etc. This helped me to put my Sass files into different folders making my code more organised and easier to maintain instead of having to put all my CSS code into one big stylesheet. I used NPM scripts to watch and compile any changes made to the Sass files. It would also let me know of any errors allowing me to quickly debug my code.

I always use version control to monitor and track any changes to my code. I used Git and GitHub to commit my code and push any new changes upto the site's repo. 

I used a small and lightweight CSS framework called UIKit which allowed me to build and customise different UI components such as the mobile sidebar and filter tabs.

The site has various content such as types of services & sectors, solicitors, case studies, locations etc. To allow users to add their own content I created various custom post types using PHP.

I created custom queries to fetch data from the database in order to display content from the different custom post types. E.g. Displaying four solicitors on the homepage and then adding a link to allow the user to got to the page that displays every solicitor.

I used the WordPress loop to output content such as the news posts and the different types of content from the custom post types such as the services, locations, sectors and case studies. I then wrapped the loop in a container so I could use CSS Grid to display each item from the loop in a 3x3 or 4x4 grid layout.

The site uses very few plugins as this is a custom-built site and installing plugins would be unnecessary as I didn't want to affect the performance and security of the site. However, I used two popular WordPress plugins called Advanced Custom Fields & Yeost SEO. ACF is my favorite and most used plugin whenever I create a custom WP site. This plugin allows me to customise the WordPress edit screen and tailor the content editing experience. E.g. I used ACF to create the fields for the hero carousel on the homepage. The user can edit the carousel slides by adding their own images, title and description. I used Yeost SEO to add meta descriptions for every page on the site.

## Testing

Now that I have developed the site it was now time to test the site. Firstly, I made sure all of the links on the site navigated to the right pages. Secondly, I tested the site on various devices to ensure that it was fully responsive. Thirdly, I did a color contrast check to ensure that the colors used were legible for all users. I also viewed the site on different web browsers to ensure that there were no styling issues and that everything rendered on the site looked perfect.

## Deploy

Now that I have developed and tested the site, it was now time to deploy it live. This was a very simple process. I bought a domain name and a WordPress hosting plan in order to put the site live. I have also added this site to my personal portfolio for people to view.

## Wrapping up

To conclude, I enjoyed putting this site together. As you have read, I used a structured method (Research, Design, Develop, Test & Deploy) for creating this site. The main benefit of following this process is that I can complete sites to a high standard and on time. Hopefully, this site and this write-up gave you a glimpse into how I work as a front-end developer.

### Homepage Wireframe
![Homepage Wireframe Screenshot](https://github.com/mo-rob-1/legal-aspire-solicitors/blob/main/images/las-homepage-wireframe-screenshot.jpg?raw=true)

### Homepage Site Screenshot
![Homepage Site Screenshot](https://github.com/mo-rob-1/legal-aspire-solicitors/blob/main/images/las-homepage-screenshot.png?raw=true)
