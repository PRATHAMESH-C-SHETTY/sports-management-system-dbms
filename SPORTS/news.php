<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Sports News Scrolling Bar</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .news-container {
            width: 80%;
            background-color: #333;
            color: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .news-container::before {
            content: 'Latest Indian Sports News';
            position:relative;
            top: -10px;
            left: 20px;
            background-color: #f57c00;
            color: #fff;
            padding: 5px 10px;
            border-radius: 10px;
            font-weight: bold;
        }

        marquee {
            font-size: 25px;
            font-weight: 300;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .news-container {
            animation: fadeIn 1s ease-in-out;
        }

        @media (max-width: 768px) {
            .news-container {
                width: 90%;
                padding: 10px;
            }

            marquee {
                font-size: 16px;
            }

            .news-container::before {
                font-size: 14px;
                top: -8px;
                left: 15px;
                padding: 6px 12px;
            }
        }
    </style>
</head>
<body>
    <div class="news-container">
        <marquee id="news-marquee" behavior="scroll" direction="left">
            Loading Indian sports news...
        </marquee>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const newsMarquee = document.getElementById("news-marquee");

            // Function to fetch Indian sports news
            async function fetchIndianSportsNews() {
                const apiKey = '8619ccd30b964d67a63efb38f6cefb92'; // Replace with your API key
                const url = `https://newsapi.org/v2/everything?q=India+sports&apiKey=${apiKey}`;

                try {
                    const response = await fetch(url);
                    const data = await response.json();
                    displayNews(data.articles);
                } catch (error) {
                    console.error("Error fetching Indian sports news:", error);
                    newsMarquee.textContent = "Failed to load Indian sports news.";
                }
            }

            // Function to display news in the marquee
            function displayNews(articles) {
                if (articles.length === 0) {
                    newsMarquee.textContent = "No Indian sports news available at the moment.";
                    return;
                }

                let newsItems = articles.map(article => article.title);
                newsMarquee.textContent = newsItems.join(" • ");
            }

            // Fetch Indian sports news on page load
            fetchIndianSportsNews();
        });
    </script>
</body>
</html>
