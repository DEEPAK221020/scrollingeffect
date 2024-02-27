<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header, footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .container {
            display: flex;
            flex-direction: row;
            margin-top: 50px; /* Adjust this margin to avoid content overlapping with the header */
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #f1f1f1;
            height: 10vh;
            overflow-y: auto;
            padding: 20px;
            position: -webkit-sticky;
            position: sticky;
            top: 50px; /* Adjust this top position to avoid overlapping with the header */
            transition: top 0.3s ease-in-out;
        }

        .content {
            flex: 1;
            padding: 20px;
            position: relative;
        }

        /* Add some styles for better visibility */
        h2 {
            color: #333;
        }

        p {
            color: #666;
        }
    </style>
</head>
<body>

    <header>
        <h1>Header</h1>
    </header>

    <div class="container">
        <div class="sidebar" id="sidebar">
            <h2>Sidebar</h2>
            <p>Your sidebar content goes here.</p>
        </div>
        <div class="content" id="content">
            <h2>Main Content</h2>
            <p>Your main content goes here. It will push the sidebar down as needed.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio veritatis, doloribus voluptas asperiores perspiciatis omnis sint officia, soluta totam est autem illo minima assumenda quaerat nulla illum similique praesentium beatae.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum numquam natus quos minus reiciendis qui optio provident laudantium placeat. Quaerat ea eaque repudiandae temporibus cupiditate placeat molestiae iste, nihil amet?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic et autem culpa repudiandae a, laboriosam vel nulla illo quasi eum reiciendis nostrum reprehenderit ipsa labore quae ratione illum suscipit sapiente.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, tempora quas eius adipisci reprehenderit delectus sit aliquid iste praesentium. Earum tempora, vero facilis voluptatibus a assumenda praesentium aspernatur fugit accusantium.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium natus, pariatur, non quos consectetur, explicabo soluta quod quibusdam alias quaerat voluptate cupiditate! Vero soluta quod veritatis temporibus doloremque quisquam dolore.
            </p>
            <!-- Add more sections as needed -->
            <section id="section1">
                <h2>Section 1</h2>
                <p>Content for section 1.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium tempore natus hic est ducimus nostrum quia debitis amet. Quos voluptatum maiores blanditiis commodi quia, ab dolor? Iure neque ullam voluptates.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam voluptates dolorem esse perspiciatis ducimus eos facilis, ullam facere id, deserunt iure dignissimos voluptatum? Quasi, hic labore. Quidem tempore unde voluptatibus.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae excepturi cupiditate recusandae in, corrupti, velit eos quasi optio minima voluptas illo atque quisquam animi nostrum laboriosam aliquam odio necessitatibus eveniet!locale_filter_matcheslorem
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus molestiae repellat alias, rerum temporibus facilis repudiandae. Iusto voluptas saepe sint, esse perspiciatis ipsa illo distinctio quam officia rem blanditiis quia?Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, ullam. Eaque, impedit neque. Iusto debitis consequuntur error beatae nemo nihil praesentium fugiat, incidunt culpa eligendi rem quae, doloribus aspernatur tempore!
                </p>
            </section>
            <section id="section2">
                <h2>Section 2</h2>
                <p>Content for section 2.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, assumenda et? Asperiores adipisci possimus a tenetur rerum molestias officia quae quaerat placeat temporibus, quis sunt! Dicta eligendi laborum quibusdam <expedita class="lorem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, pariatur. Corrupti excepturi unde tempora vitae laudantium beatae, vel odio culpa exercitationem. Maxime doloribus velit quas illum. Aliquam maxime consequuntur <deserunt class="lorem">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis laboriosam at ex facilis tempore sapiente quibusdam aliquid voluptas cum perferendis, in modi atque saepe quae illum deleniti earum. Quibusdam, <error class="lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod cumque quasi assumenda sapiente tempora earum illo eaque, voluptates aliquid esse itaque, ex dolorum corrupti, odio pariatur laborum nesciunt ipsum <mollitia class="lorem">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae exercitationem nihil architecto nam reiciendis ab consectetur inventore nostrum dicta, laborum quo atque maiores veniam neque? Earum est dolor enim dolorem!</mollitia></error></deserunt></expedita>
                </p>
            </section>
        </div>
    </div>

    <footer>
        <h3>Footer</h3>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis iure, ut qui laboriosam nesciunt numquam provident libero. Deleniti repellat amet voluptate error natus fugiat doloribus cupiditate quae dignissimos, aspernatur perspiciatis?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis iure, ut qui laboriosam nesciunt numquam provident libero. Deleniti repellat amet voluptate error natus fugiat doloribus cupiditate quae dignissimos, aspernatur perspiciatis?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis iure, ut qui laboriosam nesciunt numquam provident libero. Deleniti repellat amet voluptate error natus fugiat doloribus cupiditate quae dignissimos, aspernatur perspiciatis?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis iure, ut qui laboriosam nesciunt numquam provident libero. Deleniti repellat amet voluptate error natus fugiat doloribus cupiditate quae dignissimos, aspernatur perspiciatis?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis iure, ut qui laboriosam nesciunt numquam provident libero. Deleniti repellat amet voluptate error natus fugiat doloribus cupiditate quae dignissimos, aspernatur perspiciatis?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis iure, ut qui laboriosam nesciunt numquam provident libero. Deleniti repellat amet voluptate error natus fugiat doloribus cupiditate quae dignissimos, aspernatur perspiciatis?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis iure, ut qui laboriosam nesciunt numquam provident libero. Deleniti repellat amet voluptate error natus fugiat doloribus cupiditate quae dignissimos, aspernatur perspiciatis?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis iure, ut qui laboriosam nesciunt numquam provident libero. Deleniti repellat amet voluptate error natus fugiat doloribus cupiditate quae dignissimos, aspernatur perspiciatis?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis iure, ut qui laboriosam nesciunt numquam provident libero. Deleniti repellat amet voluptate error natus fugiat doloribus cupiditate quae dignissimos, aspernatur perspiciatis?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis iure, ut qui laboriosam nesciunt numquam provident libero. Deleniti repellat amet voluptate error natus fugiat doloribus cupiditate quae dignissimos, aspernatur perspiciatis?
    </footer>

    <script>
        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const target = document.querySelector(this.getAttribute('href'));
                window.scrollTo({
                    top: target.offsetTop - 50,
                    behavior: 'smooth'
                });
            });
        });

        // Get the content and sidebar elements
        const content = document.getElementById('content');
        const sidebar = document.getElementById('sidebar');
        
        // Get the offset position of the content
        const contentOffset = content.offsetTop;

        // Add a scroll event listener
        window.addEventListener('scroll', () => {
            // Get the current scroll position
            const scrollPosition = window.scrollY;

            // Check if the scroll position is below the header and above the footer
            if (scrollPosition >= contentOffset) {
                sidebar.style.top = '0';
            } else {
                sidebar.style.top = '50px';
            }
        });
    </script>

</body>
</html>
