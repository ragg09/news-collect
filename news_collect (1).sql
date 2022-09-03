-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 04:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_collect`
--

-- --------------------------------------------------------

--
-- Table structure for table `listenapi`
--

CREATE TABLE `listenapi` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `publish_date` date NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listenapi`
--

INSERT INTO `listenapi` (`id`, `title`, `publisher`, `image`, `publish_date`, `url`) VALUES
(1, 'X22 Report', 'realx22report', 'https://cdn-images-1.listennotes.com/podcasts/x22-report-realx22report-yzAaLjmkXF--op7UxJEyvek.300x300.jpg', '2021-03-27', 'https://www.listennotes.com/c/c39c656c82ad49ba8c893e0d630a6750/'),
(2, 'Bag Man', 'MSNBC, Rachel Maddow', 'https://cdn-images-1.listennotes.com/podcasts/bag-man-msnbc-rachel-maddow-T4UxsZp70-o-n-CNRrgEmYs.300x300.jpg', '2021-02-16', 'https://www.listennotes.com/c/dee13509807e4cf497be94cbaa368dae/'),
(3, 'Timber Wars', 'Oregon Public Broadcasting', 'https://cdn-images-1.listennotes.com/podcasts/timber-wars-oregon-public-broadcasting-yPjCDOKwdx4-MSvEynZpcu3.300x300.jpg', '2021-01-28', 'https://www.listennotes.com/c/78af9e4434f64c8b9a545b9fe1b01d48/'),
(4, 'Tim Pool Daily Show', 'Tim Pool', 'https://cdn-images-1.listennotes.com/channel/image/095dc01574fb4145add304f261240126.jpg', '2021-03-26', 'https://www.listennotes.com/c/5ce40a3419764923b3b34db97bb7358c/'),
(5, 'The Sean Hannity Show', 'Sean Hannity', 'https://cdn-images-1.listennotes.com/podcasts/the-sean-hannity-show-sean-hannity-tWCMsoFyiBS-oTBj1bCp-uI.300x300.jpg', '2021-03-26', 'https://www.listennotes.com/c/23e425e31d984ecdb337af195fac20a8/'),
(6, 'The Ben Ferguson Podcast', 'iHeartRadio', 'https://cdn-images-1.listennotes.com/podcasts/the-ben-ferguson-podcast-iheartradio-vOa94_EgKBk-aT1Wsk69p-y.300x300.jpg', '2021-03-27', 'https://www.listennotes.com/c/2f9db8979aae46419cbef30ae96c4f47/'),
(7, 'The Dishcast with Andrew Sullivan', 'Andrew Sullivan', 'https://cdn-images-1.listennotes.com/podcasts/the-dishcast-rQ01j5RuyHa-QDI1hmCFg7s.300x300.jpg', '2021-03-26', 'https://www.listennotes.com/c/8f778831d25a40aeb749e6de73d79282/'),
(8, 'Enough', 'The Daily Wire', 'https://cdn-images-1.listennotes.com/podcasts/enough-7Ape-OxR3JZ-7_XRF-4eHsq.300x300.jpg', '2020-11-13', 'https://www.listennotes.com/c/cf8afeb975904ff48b9bae9bc2825bd0/'),
(9, 'Ruthless', 'Comfortably Smug, Josh Holmes, Michael Duncan', 'https://cdn-images-1.listennotes.com/podcasts/ruthless-qvgMcVhzAQ6-rQqmdXsC8xf.300x300.jpg', '2021-03-25', 'https://www.listennotes.com/c/98d1cc99917f4eff8e4506634296942a/'),
(10, 'NowThis Kids', 'NowThis', 'https://cdn-images-1.listennotes.com/podcasts/nowthis-kids-L3x2oWgsYES-iH4yLAvkwfX.300x300.jpg', '2021-03-24', 'https://www.listennotes.com/c/42985ba66303468cba3afcbb5f1bbdd3/'),
(11, 'Covid Confidential', 'BBC Radio', 'https://cdn-images-1.listennotes.com/podcasts/covid-confidential-bbc-radio-xDEe4AIYzyi-IwZtnV58TUe.300x300.jpg', '2021-03-15', 'https://www.listennotes.com/c/2ae4198642fa41738f24f6338b8e81b2/'),
(12, 'The Covid House', 'Tim R. Woods', 'https://cdn-images-1.listennotes.com/podcasts/the-covid-house-W8JDiv2kApS-W-7PCJUOrAE.300x300.jpg', '2021-03-19', 'https://www.listennotes.com/c/71449144e25349548c4a783d18e65522/'),
(13, 'Stories of COVID™', 'Veronica Kirin', 'https://cdn-images-1.listennotes.com/podcasts/stories-of-covidtm-veronica-kirin-R8FxcJGSWYI-jNWzBM2mhiG.300x300.jpg', '2021-03-25', 'https://www.listennotes.com/c/d5127e139bad4fc180f302efa3e57fd3/'),
(14, 'Notes from COVID', 'Laura Delgado', 'https://cdn-images-1.listennotes.com/podcasts/notes-from-covid-cvWm06KXFui-DmBWTPo3RnA.300x300.jpg', '2020-12-06', 'https://www.listennotes.com/c/bdcf010a9cd34f4d8b4617d8e34dcb96/'),
(15, 'COVID Sucks, People Don', 'Hank Green', 'https://cdn-images-1.listennotes.com/podcasts/covid-sucks-people-dont-Zf6QhmHbTEi-ekZ1D_rRuVg.300x300.jpg', '2020-05-27', 'https://www.listennotes.com/c/f417fe0e711d4d39ba854aa159b1c68d/'),
(16, 'Karen’s Covid Diaries', 'Karen Abramson', 'https://cdn-images-1.listennotes.com/podcasts/karens-covid-diaries-karen-abramson-FVypMX-7UDe-zVubygx67Hn.300x300.jpg', '2020-12-02', 'https://www.listennotes.com/c/8a1e96760bbe45969162d4fe5b8020a4/'),
(17, 'Covid Daily News: Coronavirus Developments With Nate Duncan and Ben Taylor', 'Nate Duncan', 'https://cdn-images-1.listennotes.com/podcasts/the-coronavirus-daily-podcast-the-most-Gokfz0jPtrh-nJgqjbzo-HV.300x300.jpg', '2020-10-04', 'https://www.listennotes.com/c/4ef2d8464e7946d5b26e5989bdb8f3e9/'),
(18, 'BEYOND COVID', 'Eric Meade, Futurist', 'https://cdn-images-1.listennotes.com/podcasts/beyond-covid-SyXtvw148PM-2frea7YWFGc.300x300.jpg', '2020-11-24', 'https://www.listennotes.com/c/e34070ef33ee40598b518d3b639b8334/'),
(19, 'Covid Korea Update | Korea FM | KoreaFM.net', 'Korea FM', 'https://cdn-images-1.listennotes.com/podcasts/covid-korea-update-koreafmnet-korea-fm--piNmd2gBzh-oCv_X6dNRU7.300x300.jpg', '2021-01-04', 'https://www.listennotes.com/c/94b03ef918954311b6470bb0505b97c7/'),
(20, 'Viral: COVID - 19', 'VIRAL', 'https://cdn-images-1.listennotes.com/podcasts/viral-covid-19-viral-nzIsC9eTctF-pYcamrbQ5GS.300x300.jpg', '2020-08-07', 'https://www.listennotes.com/c/8680b5e5a89144259a58533ce5c92e77/'),
(31, 'The Vaccine Conversation with Melissa and Dr. Bob', 'Immunity Education Group', 'https://cdn-images-1.listennotes.com/podcasts/the-vaccine-conversation-with-melissa-and-mGMCR2dnpse-zZQKEoSihqb.300x300.jpg', '2021-03-24', 'https://www.listennotes.com/c/cce67ad974ed4e24b388ffdb67c42fd6/'),
(32, 'COVID-19:  The Search for a Vaccine', 'UK Gov', 'https://cdn-images-1.listennotes.com/podcasts/covid-19-the-search-for-a-vaccine-dS_s9WfAIcD-Bah6i0QedSq.300x300.jpg', '2020-10-26', 'https://www.listennotes.com/c/00d924bf63684fe48cd30f9317a9c928/'),
(33, 'The Behavioural Vaccine', 'HeadStuff', 'https://cdn-images-1.listennotes.com/podcasts/the-behavioural-vaccine-headstuff-cCjlPNzMbuH-zgMkUvDB5C7.300x300.jpg', '2020-12-19', 'https://www.listennotes.com/c/fccaf97742014282816ca6a6d4b8e2a2/'),
(34, 'Vaccine 4 1 1 - News on the search for a Covid 19 Coronavirus Vaccine', 'Sound That Brands', 'https://cdn-images-1.listennotes.com/podcasts/vaccine-4-1-1-news-on-the-search-for-a-Z63q-yng1Q0-704aG-dWruP.300x300.jpg', '2021-03-23', 'https://www.listennotes.com/c/3056e355c6444ddd9cf6a72285b3e327/'),
(35, 'Covid 19 Vaccine Guide', 'Covid Vaccine', 'https://cdn-images-1.listennotes.com/podcasts/covid-19-vaccine-guide-iB-qLA5XIdf-LCPmauYlwrW.300x300.jpg', '2021-03-09', 'https://www.listennotes.com/c/2e5f27d6bcf64f138e6fad42a82fbdec/'),
(36, 'Optimism Vaccine', 'The Optimism Vaccine Network', 'https://cdn-images-1.listennotes.com/podcasts/optimism-vaccine-the-optimism-vaccine-network-HC7KkV2QvWs-smYM-KOfpq2.300x300.jpg', '2021-03-26', 'https://www.listennotes.com/c/716065aeaacf434884d6874496660acf/'),
(37, 'Covid-19 Vaccine', 'Elizabeth Stuenkel', 'https://cdn-images-1.listennotes.com/podcasts/covid-19-vaccine-6p2EC53qbQN-h6QRiP-C3MN.300x300.jpg', '2021-02-09', 'https://www.listennotes.com/c/a54c75ec567042b791d479b16f3d9570/'),
(38, 'How to Vaccinate the World', 'BBC Radio 4', 'https://cdn-images-1.listennotes.com/podcasts/how-to-vaccinate-the-world-iBxQ1A0LvEO-jsExAi7-081.300x300.jpg', '2021-03-22', 'https://www.listennotes.com/c/f6196906fcb6455295681b633f837361/'),
(39, 'NVIC', 'National Vaccine Information Center', 'https://cdn-images-1.listennotes.com/podcasts/nvic-national-vaccine-information-center-BlK89XCVhe6.300x300.jpg', '2021-02-02', 'https://www.listennotes.com/c/ac3f344fcc8740acb8e4596bf66d49f8/'),
(40, 'The Vaccine Conversation with Melissa and Dr. Bob', 'Immunity Education Group', 'https://cdn-images-1.listennotes.com/podcasts/the-vaccine-conversation-with-melissa-and-qM6ITSGcQ8O-fVjvmUNZRcd.300x300.jpg', '2021-03-24', 'https://www.listennotes.com/c/8965195cb3654bc09ca2a1dbd19b8729/'),
(41, 'WSJ Your Money Briefing', 'The Wall Street Journal', 'https://cdn-images-1.listennotes.com/podcasts/wsj-your-money-briefing-the-wall-street-H-RXBGYk5lu-zW5AHt6esjb.300x300.jpg', '2021-04-01', 'https://www.listennotes.com/c/822ce510b090438fa1685a7df158517b/'),
(42, 'Inside the Hive', 'Vanity Fair', 'https://cdn-images-1.listennotes.com/podcasts/inside-the-hive-vanity-fair-YEDBZMiXj91-H2VuZOpArf-.300x300.jpg', '2021-03-26', 'https://www.listennotes.com/c/8bb6ed8a38364553b778caa5681c5dd2/');

-- --------------------------------------------------------

--
-- Table structure for table `newsapi`
--

CREATE TABLE `newsapi` (
  `id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `urlimage` varchar(255) NOT NULL,
  `publishat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsapi`
--

INSERT INTO `newsapi` (`id`, `author`, `title`, `url`, `urlimage`, `publishat`) VALUES
(1, 'Frances Mangosing', 'Sinas: Police raids that killed 9 activists ‘legitimate’ - INQUIRER.net', 'https://www.inquirer.net', 'https://newsinfo.inquirer.net/files/2020/11/sinas-23nov2020-1-e1606125405361-620x465.jpg', '2021-03-08'),
(2, 'Emma Batha, Reuters', 'NASA Mars scientists spur girls to ', 'https://news.abs-cbn.com/overseas/03/08/21/nasa-mars-scientists-spur-girls-to-reach-for-the-stars', 'https://sa.kapamilya.com/absnews/abscbnnews/media/2021/overseas/03/08/20210308-mars-team-ig.jpg?ext=.jpg', '2021-03-08'),
(3, 'CNN Philippines', 'Meghan reveals ', 'http://www.cnnphilippines.com/world/2021/3/8/meghan-oprah-interview-racism.html', 'http://cnnphilippines.com/.imaging/mte/demo-cnn-new/750x450/dam/cnn/2021/3/8/Harry-and-Meghan-with-their-son_CNNPH.jpg/jcr:content/Harry-and-Meghan-with-their-son_CNNPH.jpg', '2021-03-08'),
(4, 'Google News', 'Meghan And Harry', 'https://news.google.com/__i/rss/rd/articles/CBMiK2h0dHBzOi8vd3d3LnlvdXR1YmUuY29tL3dhdGNoP3Y9MFNKaklhNEpTS2PSAQA?oc=5', 'https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png', '2021-03-08'),
(5, 'Google News', 'Team LeBron wins NBA All-Star Game 170-150 - africanews', 'https://news.google.com/__i/rss/rd/articles/CBMiK2h0dHBzOi8vd3d3LnlvdXR1YmUuY29tL3dhdGNoP3Y9YTBhcERYN2hzVHPSAQA?oc=5', 'https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png', '2021-03-08'),
(6, 'Google News', 'Gov', 'https://news.google.com/__i/rss/rd/articles/CBMiK2h0dHBzOi8vd3d3LnlvdXR1YmUuY29tL3dhdGNoP3Y9M2M3V3NYZ0Q5dG_SAQA?oc=5', 'https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png', '2021-03-08'),
(7, 'Google News', 'DITO launches commercially in 15 cities in Visayas, Mindanao | ANC - ANC 24/7', 'https://news.google.com/__i/rss/rd/articles/CBMiK2h0dHBzOi8vd3d3LnlvdXR1YmUuY29tL3dhdGNoP3Y9VXgwLWJwd1dxU2_SAQA?oc=5', 'https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png', '2021-03-08'),
(8, 'Google News', 'NBA Top 10 Plays Of The Night | 2021 #NBAAllStar - NBA', 'https://news.google.com/__i/rss/rd/articles/CBMiK2h0dHBzOi8vd3d3LnlvdXR1YmUuY29tL3dhdGNoP3Y9T2wtYmVtX2Jkcm_SAQA?oc=5', 'https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png', '2021-03-08'),
(9, 'ABS-CBN News', 'First quarter GDP growth may still be negative, says BSP’s Diokno - ABS-CBN News', 'https://news.abs-cbn.com/business/03/08/21/first-quarter-gdp-growth-may-still-be-negative-says-bsps-diokno', 'https://sa.kapamilya.com/absnews/abscbnnews/media/2020/news/06/29/diokno.jpg', '2021-03-08'),
(10, 'Tan Mei Zi', 'Malaysian singer Cheryl K brings Lionel Richie to tears with ‘American Idol’ audition of ‘Endless Love’ (VIDEO) - Malay Mail', 'https://www.malaymail.com/news/showbiz/2021/03/08/malaysian-singer-cheryl-k-brings-lionel-richie-to-tears-with-american-idol/1955908', 'https://media2.malaymail.com/resize_cache/uploads/articles/2021/2021-03/Cheryl_K_20210307-seo.jpg', '2021-03-08'),
(11, 'ABS-CBN News', '82 pct of PH firms to increase pay this year, study claims - ABS-CBN News', 'https://news.abs-cbn.com/business/03/08/21/82-pct-of-ph-firms-to-increase-pay-this-year-study-claims', 'https://sa.kapamilya.com/absnews/abscbnnews/media/2021/business/03/08/20210305-covid-pedestrian-commuters-jc-8.jpg', '2021-03-08'),
(13, 'Reuters', 'Analysis: China', 'https://finance.yahoo.com/news/analysis-chinas-ambitious-covid-19-075724555.html', 'https://s.yimg.com/uu/api/res/1.2/.vTbXWP.BO9r_HSgrxFR7w--~B/aD01MzM7dz04MDA7YXBwaWQ9eXRhY2h5b24-/https://media.zenfs.com/en/reuters-finance.com/6abbe7b256de64c5e00c6133f969a3bc', '2021-03-15'),
(14, 'Ben Sin', 'Oppo Find X3 Pro Review: China’s Biggest Phone Brand Has A New Flagship Phone - Forbes', 'https://www.forbes.com/sites/bensin/2021/03/16/oppo-find-x3-pro-review-chinas-biggest-phone-brand-has-a-new-flagship-phone/', 'https://thumbor.forbes.com/thumbor/fit-in/1200x0/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F604f116757d5f5dcc043d0f9%2F0x0.jpg', '2021-03-16'),
(15, 'Google News', 'CLIPPERS at MAVERICKS | FULL GAME HIGHLIGHTS | March 15, 2021 - NBA', 'https://news.google.com/__i/rss/rd/articles/CBMiK2h0dHBzOi8vd3d3LnlvdXR1YmUuY29tL3dhdGNoP3Y9bGUwSW5NTDZRaDjSAQA?oc=5', 'https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png', '2021-03-16'),
(16, 'Google News', 'KNICKS at NETS | FULL GAME HIGHLIGHTS | March 15, 2021 - NBA', 'https://news.google.com/__i/rss/rd/articles/CBMiK2h0dHBzOi8vd3d3LnlvdXR1YmUuY29tL3dhdGNoP3Y9YlI1c1RrXzRRbXfSAQA?oc=5', 'https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png', '2021-03-16'),
(17, 'From NBA.com Staff', 'Giannis Antetokounmpo registers triple-double in 3rd straight game - NBA.com', 'https://www.nba.com/news/giannis-antetokounmpo-registers-triple-double-in-3rd-straight-game', 'https://cdn.nba.com/manage/2021/03/GettyImages-1231739670-scaled.jpg', '2021-03-16'),
(18, 'Michael Bueza', 'COVID-19 lockdown: The past year in charts and maps - Rappler', 'https://www.rappler.com/newsbreak/data-documents/covid-19-lockdown-charts-maps-past-year-2020-2021', 'https://assets2.rappler.com/2021/03/charts-numbers-covid-19-lockdown-1615857118996.jpg', '2021-03-16'),
(19, 'Google News', 'BUCKS at WIZARDS | FULL GAME HIGHLIGHTS | March 15, 2021 - NBA', 'https://news.google.com/__i/rss/rd/articles/CBMiK2h0dHBzOi8vd3d3LnlvdXR1YmUuY29tL3dhdGNoP3Y9RHpQeVFDaVJBUTTSAQA?oc=5', 'https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png', '2021-03-16'),
(21, 'Pna.gov.ph', 'WHO continues to recommend AstraZeneca vaccine use - pna.gov.ph', 'https://www.pna.gov.ph/articles/1133715', 'https://files01.pna.gov.ph/ograph/2021/03/16/trazen-2.jpg', '2021-03-16'),
(22, 'Google News', 'Taylor Swift - cardigan / august / willow (Live From The 63rd GRAMMYs ® / 2021) - TaylorSwiftVEVO', 'https://news.google.com/__i/rss/rd/articles/CBMiK2h0dHBzOi8vd3d3LnlvdXR1YmUuY29tL3dhdGNoP3Y9VXppaTQ0U0RZRkHSAQA?oc=5', 'https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png', '2021-03-15'),
(23, 'GMA News', 'Non-compliance with ventilation rules also seen as factor in COVID-19 case surge —DOH exec - GMA News Online', 'https://www.gmanetwork.com/news/news/nation/779815/poor-ventilation-in-establishments-also-seen-as-factor-in-covid-19-case-surge-doh-exec/story/', 'https://images.gmanews.tv/webpics/2020/01/doh_building_2020_01_29_17_04_17.jpg', '2021-03-15'),
(24, 'CNN Philippines', 'Supermassive black hole spotted wandering through space - CNN Philippines', 'http://cnnphilippines.com/world/2021/3/16/Supermassive-black-hole-.html', 'http://cnnphilippines.com/.imaging/mte/demo-cnn-new/750x450/dam/cnn/2021/3/16/Supermassive-black-hole_CNNPH.png/jcr:content/Supermassive-black-hole_CNNPH.png', '2021-03-15'),
(25, 'Associated Press', 'San Francisco Expands Who Can Get Vaccine Under New Rules - NBC Bay Area', 'https://www.nbcbayarea.com/news/local/race-for-a-vaccine/san-francisco-expands-who-can-get-vaccine-under-new-rules/2492334/', 'https://i0.wp.com/media.nbcbayarea.com/2021/01/generic-vaccination-shots.png?quality=85&resize=1200%2C675&strip=all&ssl=1', '2021-03-15'),
(26, 'Jamaica Observer', 'Canadian experts say AstraZeneca vaccine is safe', 'https://www.jamaicaobserver.com/international/canadian-experts-say-astrazeneca-vaccine-is-safe_217116?profile=1470', 'https://www.jamaicaobserver.com/apps/pbcsi.dll/storyimage/JO/20210316/ARTICLE/303169989/AR/0/AR-303169989.jpg', '2021-03-16'),
(27, 'Google News', 'George Segal passes away from surgery complications - KTNV Channel 13 Las Vegas', 'https://news.google.com/__i/rss/rd/articles/CBMiK2h0dHBzOi8vd3d3LnlvdXR1YmUuY29tL3dhdGNoP3Y9T25VZXRiUHE4SFXSAQA?oc=5', 'https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png', '2021-03-24'),
(28, 'Google News', 'Ally-turned-critic? Imee Marcos hits ', 'https://news.google.com/__i/rss/rd/articles/CBMiK2h0dHBzOi8vd3d3LnlvdXR1YmUuY29tL3dhdGNoP3Y9N0w3VWwySVN0Q03SAQA?oc=5', 'https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png', '2021-03-24'),
(29, 'Jitendra Soni', 'Can OnePlus 9R and OnePlus Nord co-exist? - TechRadar', 'https://www.techradar.com/in/news/can-oneplus-9r-and-oneplus-nord-co-exist', 'https://cdn.mos.cms.futurecdn.net/dzFr4QVriQLx2m4LxaZ4r4-1200-80.jpg', '2021-03-24'),
(30, 'Inc.', 'A Mental Health Startup Just Hired Prince Harry. It', 'https://www.inc.com/justin-bariso/a-mental-health-startup-just-hired-prince-harry-its-a-lesson-for-every-company.html', 'https://www.incimages.com/uploaded_files/image/1024x576/GettyImages-1205521722_464298.jpg', '2021-03-24'),
(31, 'Google News', 'More flexibility for those who are vaccinated | ST NEWS NIGHT - The Straits Times', 'https://news.google.com/__i/rss/rd/articles/CBMiK2h0dHBzOi8vd3d3LnlvdXR1YmUuY29tL3dhdGNoP3Y9Mmp4VE9KaWVPQlXSAQA?oc=5', 'https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png', '2021-03-24'),
(32, 'Kate Duffy', 'Elon Musk: SpaceX will land Starships on Mars ', 'https://www.businessinsider.com/elon-musk-mars-spacex-land-starship-rockets-2030-europe-2021-3', 'https://i.insider.com/605b1e140d155e0019ef6620?width=1200&format=jpeg', '2021-03-24'),
(33, 'Darrell Etherington', 'SpaceX launches 60 more Starlink satellites, making 240 launched this month alone - Yahoo Philippines News', 'https://ph.news.yahoo.com/spacex-launches-60-more-starlink-122109394.html', 'https://s.yimg.com/ny/api/res/1.2/xSlSwe8asBvVqusiIcyHhw--/YXBwaWQ9aGlnaGxhbmRlcjt3PTIwMDA7aD0xMzMz/https://s.yimg.com/uu/api/res/1.2/pfHaVtpsheij1LhOacHDtA--~B/aD0yMDAwO3c9MzAwMDthcHBpZD15dGFjaHlvbg--/https://media.zenfs.com/en/techcrunch_350/07663434444', '2021-03-24'),
(34, 'Europa.eu', 'Transparency and authorisation mechanism - EU News', 'https://ec.europa.eu/commission/presscorner/detail/en/ip_21_1352', 'https://ec.europa.eu/commission/presscorner/assets/framework/images/logo/ec_logo.png', '2021-03-24'),
(35, 'Associated Press Television News', 'Tobias Harris comes up big late as Sixers hold off Warriors - Republic World', 'https://www.republicworld.com/sports-news/basketball-news/tobias-harris-comes-up-big-late-as-sixers-hold-off-warriors.html', 'https://img.republicworld.com/republic-prod/stories/promolarge/xxhdpi/i0u0c34jm9mmvblc_1616585141.jpeg?tr=f-jpeg', '2021-03-24'),
(36, 'Science X staff', 'NASA Ingenuity Mars helicopter prepares for first flight - Phys.org', 'https://phys.org/news/2021-03-nasa-ingenuity-mars-helicopter-flight.html', 'https://scx2.b-cdn.net/gfx/news/hires/2021/nasaingenuit.jpg', '2021-03-24'),
(37, 'Sebastian Kettley', 'Elon Musk is bureaucracy', 'https://www.express.co.uk/news/science/1413946/elon-musk-news-bureaucracy-nasa-commercial-spaceflight-ed-gibson-skylab-astronaut-evg', 'https://cdn.images.express.co.uk/img/dynamic/151/750x445/1413946.jpg', '2021-03-24'),
(38, 'Sports Interactive Network Philippines', 'A day in the life: What', 'https://www.spin.ph/basketball/fiba/baldwin-gives-a-slice-of-life-inside-gilas-bubble-training-a2437-20210324', 'http://contents.spin.ph/image/resize/image/2021/03/24/gilas-practice-dave-ildefonso-isaac-go-jaydee-tungcab-1616581483.webp', '2021-03-24'),
(39, 'Vandana Suresh', 'Dow-like index for energy prices might help smooth transition to clean power', 'https://techxplore.com/news/2021-03-dow-like-index-energy-prices-smooth.html', 'https://scx2.b-cdn.net/gfx/news/hires/2021/dowlikeindex.jpg', '2021-03-24'),
(40, 'Business Wire', 'Railways in India, 2021 Market Study - IR Expected to Increase Focus on Freight, to Make Up for Losses Incurred from COVID-19 Passenger Train Interruptions - ResearchAndMarkets.com', 'https://www.businesswire.com/news/home/20210324005758/en/Railways-in-India-2021-Market-Study---IR-Expected-to-Increase-Focus-on-Freight-to-Make-Up-for-Losses-Incurred-from-COVID-19-Passenger-Train-Interruptions---ResearchAndMarkets.com', 'https://mms.businesswire.com/media/20210324005758/en/371054/23/ResearchAndMarkets_800px.jpg', '2021-03-24'),
(41, 'By JULIE WATSON and CARLA K. JOHNSON, Associated Press', 'US outlook improving as vaccinations rise and deaths fall', 'https://www.seattlepi.com/news/article/US-outlook-improving-as-vaccinations-rise-and-16049750.php', 'https://s.hdnux.com/photos/01/17/21/36/20780940/3/rawImage.jpg', '2021-03-24'),
(42, 'By ARITZ PARRA and JOSEPH WILSON, Associated Press', 'Spaniards line up for AstraZeneca amid concerns over vaccine', 'https://www.seattlepi.com/news/article/Spaniards-line-up-for-AstraZeneca-amid-concerns-16049756.php', 'https://s.hdnux.com/photos/01/17/21/36/20780954/5/rawImage.jpg', '2021-03-24'),
(43, 'Rory Tingle', 'Charles and Camilla arrive in Athens on their first international trip this year', 'https://www.dailymail.co.uk/news/article-9398379/Charles-Camilla-arrive-Athens-international-trip-year.html', 'https://i.dailymail.co.uk/1s/2021/03/24/16/40889080-0-image-a-2_1616602531466.jpg', '2021-03-24'),
(44, 'Hilton Hater', 'Meri Brown: I', 'https://www.thehollywoodgossip.com/2021/03/meri-brown-ill-never-leave-kody-no-matter-how-much-he-sucks/', 'https://the-hollywood-gossip-res.cloudinary.com/iu/s--tWiQoTGk--/t_full/cs_srgb,f_auto,fl_strip_profile.lossy,q_auto:420/v1616580988/meri-brown-sister-wives.png', '2021-03-24'),
(45, 'Lauren Giella', 'Five New Migrants Shelters Have Opened Since Biden Took Office', 'https://www.newsweek.com/five-new-migrants-shelters-have-opened-since-biden-took-office-1578253', 'https://d.newsweek.com/en/full/1762449/migrant-family.jpg', '2021-03-24'),
(46, 'Bloomberg News', 'Carrefour to buy Walmart’s former business in Brazil', 'https://www.digitalcommerce360.com/2021/03/24/carrefour-to-buy-walmarts-former-business-in-brazil/', 'https://www.digitalcommerce360.com/wp-content/uploads/2021/03/shutterstock_347718893-1024x493.jpg', '2021-03-24'),
(47, 'ARITZ PARRA and JOSEPH WILSON Associated Press', 'Spaniards line up for AstraZeneca amid concerns over vaccine', 'https://abcnews.go.com/Technology/wireStory/spaniards-line-astrazeneca-amid-concerns-vaccine-76655051', 'https://s.abcnews.com/images/Technology/WireAP_7db70f2e441b4a11be9087ba4d497f36_16x9_992.jpg', '2021-03-24'),
(48, 'Jeff Jacoby', 'Does the GOP have a problem with the vaccine?', 'https://www.bostonglobe.com/2021/03/24/opinion/does-gop-have-problem-with-vaccine/', 'https://bostonglobe-prod.cdn.arcpublishing.com/resizer/R34REGfEm-vDlCb_EEcSY6c0G1M=/506x0/cloudfront-us-east-1.images.arcpublishing.com/bostonglobe/WDH5KCEBEFDGBNFHNKN5UTGQV4.jpg', '2021-03-24'),
(49, 'RT', 'Calls for Merkel to face vote of no confidence after embarrassing U-turn on Covid-19 Easter lockdown', 'https://www.rt.com/news/519055-germany-merkel-confidence-covid-lockdown/', 'https://cdni.rt.com/files/2021.03/article/605b588885f5402fc61927dc.JPG', '2021-03-24'),
(50, 'AP', 'Biden’s Disciplined Agenda Rollout Tested By The Unexpected', 'https://www.huffpost.com/entry/biden-disciplined-agenda-rollout-tested-by-unexpected_n_605b6375c5b65d1c2811bbf3', 'https://img.huffingtonpost.com/asset/605b653c250000da1d1d945e.jpg?cache=f6wabzpafe&ops=1778_1000', '2021-03-24'),
(51, 'CNN Philippines', 'Groups welcome CREATE law but question some vetoed, approved provisions - CNN Philippines', 'http://cnnphilippines.com/business/2021/3/27/groups-welcome-signing-of-create-question-vetoed-approved-provisions.html', 'http://cnnphilippines.com/.imaging/mte/demo-cnn-new/750x450/dam/cnn/2018/11/22/business.png/jcr:content/business.png', '2021-03-27'),
(52, 'Kim Lyons', 'Netflix planning to launch 40 anime shows in 2021 - The Verge', 'https://www.theverge.com/2021/3/27/22353848/netflix-launch-anime-ragnarok-zeus-resident-evil-streaming', 'https://cdn.vox-cdn.com/thumbor/iexRnvKTJwll810C7TgDaqIFq9M=/0x146:2040x1214/fit-in/1200x630/cdn.vox-cdn.com/uploads/chorus_asset/file/18956934/acastro_181101_1777_netflix_0002.jpg', '2021-03-27'),
(53, 'Al Jazeera', 'Philippines announces strict COVID lockdown in and around Manila - Al Jazeera English', 'https://www.aljazeera.com/news/2021/3/27/philippines-announces-strict-covid-lockdown-in-and-around-manila', 'https://www.aljazeera.com/wp-content/uploads/2021/03/000_94N2J3-1.jpg?resize=1024%2C630', '2021-03-27'),
(54, 'Michael Sheetz', 'NASA wants companies to develop and build new space stations, with up to $400 million up for grabs - CNBC', 'https://www.cnbc.com/2021/03/27/nasa-commercial-leo-destinations-project-for-private-space-stations.html', 'https://image.cnbcfm.com/api/v1/image/106797341-1605535546503-50068043713_d63c0f19dd_k_2.jpg?v=1605536935', '2021-03-27'),
(55, 'Suzanne Oliver', 'High-Tech Face Masks Aim to Step Up the Fight Against Covid-19 - Wall Street Journal', 'https://www.wsj.com/articles/high-tech-face-masks-aim-to-step-up-the-fight-against-covid-19-11616846402', 'https://images.wsj.net/im-316160/social', '2021-03-27'),
(56, 'The Manila Times', '#Connect2Earth: Globe solidifies climate change support through action-led initiatives – The Manila - The Manila Times', 'https://www.manilatimes.net/2021/03/27/public-square/connect2earth-globe-solidifies-climate-change-support-through-action-led-initiatives/856216/', 'https://www.manilatimes.net/wp-content/uploads/2021/03/EH2021_Poster.jpg', '2021-03-27'),
(57, 'The Manila Times', 'LGUs to revert to ECQ amid Covid surge, local execs bare – The Manila Times - The Manila Times', 'https://www.manilatimes.net/2021/03/27/news/lgus-to-revert-to-ecq-amid-covid-surge-local-execs-bare/856215/', 'https://www.manilatimes.net/wp-content/uploads/2020/05/070520_MCBD6.jpg', '2021-03-27'),
(59, 'Vineet Washington', 'The Suicide Squad Trailer Sets Up Another Goofy, Action-Packed Superhero Caper - Gadgets 360', 'https://gadgets.ndtv.com/entertainment/news/the-suicide-squad-trailer-release-date-august-6-warner-bros-cast-margot-robbie-james-gunn-john-cena-2400090', 'https://i.gadgets360cdn.com/large/Suicide_squad_trailer_1616828139331.jpg', '2021-03-27'),
(60, 'Angela Coloma, ABS-CBN News', 'Experts seek 2 week MECQ as healthcare systems ', 'https://news.abs-cbn.com/news/03/27/21/experts-seek-2-week-mecq-as-healthcare-systems-challenged-by-covid-19-cases', 'https://sa.kapamilya.com/absnews/abscbnnews/media/2021/news/03/27/20210315-covdi19-disifenction-gagalangin-jc-11.jpg', '2021-03-27'),
(61, 'Sports Interactive Network Philippines', 'Chico Lanete advances to 2-point shootout final in Doha 3x3 - Sports Interactive Network Philippines', 'https://www.spin.ph/basketball/chico-lanete-advances-to-2-point-shootout-final-in-doha-3x3-a2437-20210327', 'http://contents.spin.ph/image/resize/image/2021/03/27/chico-lanete-1616826906.webp', '2021-03-27'),
(62, 'Samir Mehdi', '“My biggest goal in life is to play with LeBron James”: Andre Drummond outlined his desire to team up with... - The Sportsrush', 'https://thesportsrush.com/nba-news-my-biggest-goal-in-life-is-to-play-with-lebron-james-andre-drummond-outlined-his-desire-to-team-up-with-lakers-mvp-10-years-ago-on-twitter/', 'https://cdn-wp.thesportsrush.com/2021/03/1cd68104-untitled-design-2021-03-27t115308.819.jpg', '2021-03-27'),
(63, 'Neil Charm', 'Peso climbs on signing of tax reform law - BusinessWorld Online', 'https://www.bworldonline.com/peso-climbs-on-signing-of-tax-reform-law/', 'https://www.bworldonline.com/wp-content/uploads/2017/05/Peso-bill-crurrency.jpg', '2021-03-29'),
(64, 'GSMArena.com', 'Xiaomi Mi 11 Ultra climbs to the top of DxOMark', 'https://www.gsmarena.com/newscomm-48421.php', 'https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png', '2021-03-29'),
(65, 'Science X staff', 'Stellar eggs near galactic center hatching into baby stars - Phys.org', 'https://phys.org/news/2021-03-stellar-eggs-galactic-center-hatching.html', 'https://scx2.b-cdn.net/gfx/news/hires/2021/stellareggsn.jpg', '2021-03-29'),
(66, 'Neil Charm', 'Causes of recent inflation uptick ', 'https://www.bworldonline.com/causes-of-recent-inflation-uptick-transitory-bsp-says/', 'https://www.bworldonline.com/wp-content/uploads/2017/05/BSP-8.jpg', '2021-03-29'),
(67, 'ABS-CBN News', 'Quezon City Mayor Joy Belmonte tests positive anew for COVID-19 - ABS-CBN News', 'https://news.abs-cbn.com/news/03/29/21/quezon-city-mayor-joy-belmonte-tests-positive-anew-for-covid-19', 'https://sa.kapamilya.com/absnews/abscbnnews/media/2021/news/03/29/20200730-iatf-swab-testing-grab-gc-6990.jpg?ext=.jpg', '2021-03-29'),
(68, 'ABS-CBN News', 'LOOK: Alodia Gosiengfiao, Wil Dasovich dress up as ', 'https://news.abs-cbn.com/life/03/29/21/look-alodia-gosiengfiao-wil-dasovich-dress-up-as-attack-on-titan-characters', 'https://sa.kapamilya.com/absnews/abscbnnews/media/2021/tvpatrol/03/24/wil-alodia.jpg', '2021-03-29'),
(69, 'Eric Niiler', 'It’s Finally Time to Take Out the Space Trash - WIRED', 'https://www.wired.com/story/its-finally-time-to-take-out-the-space-trash/', 'https://media.wired.com/photos/605cabcc1e06bbcf5e8a9beb/191:100/w_1280,c_limit/51036738143_8b494e3e68_o.jpg', '2021-03-29'),
(70, 'Mario Dumaual, ABS-CBN News', 'What exactly did Samantha Bernardo tell Miss Grand International winner during coronation - ABS-CBN News', 'https://news.abs-cbn.com/life/03/29/21/what-exactly-did-samantha-bernardo-tell-miss-grand-international-winner-during-coronation', 'https://sa.kapamilya.com/absnews/abscbnnews/media/2021/tvpatrol/03/22/samantha-bernardo.jpg', '2021-03-29'),
(72, 'Inquirer.net', 'Procured 1-M doses of CoronaVac arrive in PH - INQUIRER.net', 'https://www.inquirer.net/', 'https://www.inquirer.net/wp-content/uploads/2016/10/new-inq-fb-def.jpg', '2021-03-29'),
(73, 'Ken Browne', 'EJ Obiena exclusive on Olympic gold and feeling the love from the Philippines - Olympic Channel', 'https://www.olympicchannel.com/en/stories/news/detail/ej-obiena-sets-sights-on-philippines-first-ever-olympic-gold-that-s-the-goal/', 'https://img.olympicchannel.com/images/image/private/t_social_share_thumb/primary/bkcwexnmjzmrfuqtiheb', '2021-03-29'),
(74, 'CNN Philippines', 'Oil prices dip after ship stuck in Suez Canal is partially freed - CNN Philippines', 'http://cnnphilippines.com/business/2021/3/29/oil-prices-suez-canal-partially-freed.html', 'http://cnnphilippines.com/.imaging/mte/demo-cnn-new/750x450/dam/cnn/2021/3/29/Oil-prices-dip_CNNPH.jpg/jcr:content/Oil-prices-dip_CNNPH.jpg', '2021-03-29'),
(75, 'Kristine Sabillo, ABS-CBN News', 'Philippines logs 8,920 new COVID-19 cases; 138,948 active cases highest since start of pandemic - ABS-CBN News', 'https://news.abs-cbn.com/news/04/01/21/philippines-logs-8920-new-covid-19-cases-138948-active-cases-highest-since-start-of-pandemic', 'https://sa.kapamilya.com/absnews/abscbnnews/media/2021/tvpatrol/04/01/20210315-manila-community-disinfection-jc-014449190_ios.jpg', '2021-04-01'),
(77, 'Dwight De Leon', 'Robredo camp hits back at DILG official for saying VP ', 'https://www.rappler.com/nation/robredo-camp-statement-dilg-official-saying-leni-non-essential', 'https://assets2.rappler.com/2021/02/vplr-robredo-victory-2016-elections-february-16-2021-003-1617258323708.jpg', '2021-04-01'),
(79, 'India Today', 'Xiaomi sells Redmi Note 10 series smartphones worth Rs 500 cr - India Today', 'https://www.indiatoday.in/technology/news/story/xiaomi-sells-redmi-note-10-series-smartphones-worth-rs-500-cr-1785882-2021-04-01', 'https://akm-img-a-in.tosshub.com/indiatoday/images/story/202104/prm13-647x363.jpeg?ahrlTPHy0c9YtkBHhNMotkLT9haw2yfG', '2021-04-01'),
(80, 'uing', '“Kingdom” Producers Confirm There Are No Eliminations + Share Reasons For Casting Choices And More - soompi', 'https://www.soompi.com/article/1462096wpp/kingdom-producers-confirm-there-are-no-eliminations-share-reasons-for-casting-choices-and-more', 'https://6.viki.io/image/b50d1e81300044c9b8503e4499c5b2e3.jpeg?s=900x600&e=t', '2021-04-01'),
(81, 'Al Jazeera', 'US, Philippines discuss Chinese ‘swarming’ in South China Sea - Al Jazeera English', 'https://www.aljazeera.com/news/2021/4/1/us-philippines-discuss-chinese-swarming-in-south-china-sea', 'https://www.aljazeera.com/wp-content/uploads/2021/04/2021-03-31T093356Z_145415782_RC29MM9Y1AAF_RTRMADP_3_PHILIPPINES-CHINA-SOUTHCHINASEA.jpg?resize=1200%2C630', '2021-04-01'),
(82, 'Google News', '\"Man, This Might Be Over For Us\" | Jordan Clarkson & Mike Conley Recall Jazz Plane Striking Birds - Bleacher Report', 'https://news.google.com/__i/rss/rd/articles/CBMiK2h0dHBzOi8vd3d3LnlvdXR1YmUuY29tL3dhdGNoP3Y9LU12RWRnQnBST3PSAQA?oc=5', 'https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png', '2021-04-01'),
(83, 'By Celebretainment', 'Idris Elba defends Prince Harry and Duchess Meghan', 'https://www.celebretainment.com/celebrities/idris-elba-defends-prince-harry-and-duchess-meghans-oprah-interview/article_b68fc6c7-0968-5e8e-90d4-c9a26119e819.html', 'https://bloximages.chicago2.vip.townnews.com/celebretainment.com/content/tncms/assets/v3/editorial/4/fc/4fc5f6be-0b6f-57f5-8fab-80d2f6e70e34/60648b123ceec.image.jpg?crop=1000%2C563%2C0%2C43&resize=1000%2C563&order=crop%2Cresize', '2021-04-01'),
(84, 'RICHARD LARDNER and LINDA JOHNSON  Associated Press', 'Company at heart of J&J COVID vaccine woes has series of citations - KING5.com', 'http://www.king5.com/article/news/health/coronavirus/vaccine/johnson-covid-vaccine-emergent-biosolutons-background/507-3ffd544f-f3ea-44f9-9fa2-fa82dc73b56f', 'https://media.king5.com/assets/CCT/images/03bdc3d8-79e1-49e4-a32c-aa11a15d51a2/03bdc3d8-79e1-49e4-a32c-aa11a15d51a2_1140x641.jpg', '2021-04-01'),
(85, 'Google News', 'BUCKS at LAKERS | FULL GAME HIGHLIGHTS | March 31, 2021 - NBA', 'https://news.google.com/__i/rss/rd/articles/CBMiK2h0dHBzOi8vd3d3LnlvdXR1YmUuY29tL3dhdGNoP3Y9RDBwTndweG52Q1nSAQA?oc=5', 'https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png', '2021-04-01'),
(86, 'Jianne Soriano', '5 Things To Know About Netflix', 'https://hk.asiatatler.com/life/money-heist-korean-remake-netflix', 'https://cdn.asiatatler.com/asiatatler/i/hk/2021/04/01110237-la-casa-de-papel-s01-ep01-0017_cover_2000x1125.jpg', '2021-04-01'),
(87, 'Google News', 'LAKERS at KINGS | FULL GAME HIGHLIGHTS | April 2, 2021 - NBA', 'https://news.google.com/__i/rss/rd/articles/CBMiK2h0dHBzOi8vd3d3LnlvdXR1YmUuY29tL3dhdGNoP3Y9dXI0NTdROHVrcU3SAQA?oc=5', 'https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png', '2021-04-03'),
(88, 'GMA News', 'PNP reports 40th fatality due to COVID-19 - GMA News Online', 'https://www.gmanetwork.com/news/news/nation/782290/pnp-reports-40th-fatality-due-to-covid-19/story/', 'https://images.gmanews.tv/webpics/2020/12/pnp_thumb_2020_12_23_19_43_22.jpg', '2021-04-03'),
(89, 'Cara Emmeline Garcia', 'PH bet Kelley Day wins Best National Costume in Miss Eco International pageant - GMA News', 'https://www.gmanetwork.com/entertainment/showbiznews/news/75695/ph-bet-kelley-day-wins-best-national-costume-in-miss-eco-international-pageant/story', 'https://aphrodite.gmanetwork.com/entertainment/articles/900_675_5__20210403114118.jpg', '2021-04-03'),
(90, 'Google News', 'BULLS at JAZZ | FULL GAME HIGHLIGHTS | April 2, 2021 - NBA', 'https://news.google.com/__i/rss/rd/articles/CBMiK2h0dHBzOi8vd3d3LnlvdXR1YmUuY29tL3dhdGNoP3Y9amY0R2ZMcndWSnfSAQA?oc=5', 'https://www.shareicon.net/data/2015/10/10/653798_logo_512x512.png', '2021-04-03'),
(91, 'ABS-CBN News', 'Senators urge PhilHealth to provide coverage for COVID-19 patients in hospital tents - ABS-CBN News', 'https://news.abs-cbn.com/news/04/03/21/senators-urge-philhealth-to-provide-coverage-for-covid-19-patients-in-hospital-tents', 'https://sa.kapamilya.com/absnews/abscbnnews/media/2021/news/03/22/20200805-covid-19-gat-andres-manila-gc-8692.jpg', '2021-04-03'),
(92, 'ABS-CBN News', 'Contact-tracing czar Magalong tests positive for COVID-19 - ABS-CBN News', 'https://news.abs-cbn.com/news/04/03/21/contact-tracing-czar-magalong-tests-positive-for-covid-19', 'https://sa.kapamilya.com/absnews/abscbnnews/media/2021/news/01/29/20191009-senate-ninja-cops-magalong-ma.jpg', '2021-04-03'),
(93, 'ABS-CBN News', 'COVID-hit Philippine Orthopedic Center suspends outpatient services, ER still open - ABS-CBN News', 'https://news.abs-cbn.com/news/04/03/21/covid-hit-philippine-orthopedic-center-suspends-outpatient-services-er-still-open', 'https://sa.kapamilya.com/absnews/abscbnnews/media/2021/news/04/03/philippine-orthopedic-center.jpg', '2021-04-03'),
(94, 'Reuters', 'Raptors rout Warriors by franchise-record 53 - Rappler', 'https://www.rappler.com/sports/nba/game-results-raptors-warriors-april-2-2021', 'https://assets2.rappler.com/2021/04/reuters-og-anunoby-april-3-2021-1617415452239.jpg', '2021-04-03'),
(95, 'Al Jazeera', 'Taiwan seeks arrest warrant for suspect in deadly train crash - Al Jazeera English', 'https://www.aljazeera.com/news/2021/4/3/taiwan-seeks-arrest-warrant-for-suspect-in-deadly-train-crash', 'https://www.aljazeera.com/wp-content/uploads/2021/04/2021-04-02T224444Z_1951135863_RC2YNM9C542P_RTRMADP_3_TAIWAN-TRAIN-1.jpg?resize=1200%2C630', '2021-04-03'),
(96, 'Eli Enis, Alex Suskind, Marcus Jones, Maura Johnston', 'Friday Five: Olivia Rodrigo sees ', 'https://ew.com/music/music-reviews/friday-five-olivia-rodrigo-deja-vu-garbage-cake-pop/', 'https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=%5B588%2C106%5D&w=1200&h=600&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F6%2F2021%2F04%2F02%2FFriday-Five-040221-social.jpg', '2021-04-03'),
(97, 'https://www.facebook.com/NeutralGGEsports', 'Singapore Major Dota 2 News: Team Secret Falls to Lower Bracket - ClutchPoints', 'https://clutchpoints.com/singapore-major-dota-2-news-team-secret-falls-lower-bracket/', 'https://clutchpoints.com/wp-content/uploads/2021/04/Singapore-Major-Dota-2-News-Team-Secret-Falls-Lower-Bracket-1000x600.jpg', '2021-04-02'),
(98, 'Michael McGowan', 'Australian Covid vaccine experts to urgently meet after blood clot case in Melbourne - The Guardian', 'https://amp.theguardian.com/australia-news/2021/apr/03/australian-covid-vaccine-astrazeneca-experts-urgently-meet-after-blood-clot-case-in-melbourne', 'https://i.guim.co.uk/img/media/16df293b1e76d549cc69f44294a0a3d0d16fdd50/0_81_3500_2100/master/3500.jpg?width=1200&height=630&quality=85&auto=format&fit=crop&overlay-align=bottom%2Cleft&overlay-width=100p&overlay-base64=L2ltZy9zdGF0aWMvb3ZlcmxheXMvdGctZGVm', '2021-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `publish_article`
--

CREATE TABLE `publish_article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `publishAt` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publish_article`
--

INSERT INTO `publish_article` (`id`, `title`, `publisher`, `content`, `image`, `publishAt`, `user_id`) VALUES
(7, 'article 1', 'Laravel Movie', 'Lara had been back and forth along the river path many times in her short life. Her people had not created the path—it had always been there, like the river—but their deerskin-shod feet and the wooden wheels of their handcarts kept the path well worn. Lara’s people were salt traders, and their livelihood took them on a continual journey.\r\nAt the mouth of the river, the little group of half a dozen intermingled families gathered salt from the great salt beds beside the sea. They groomed and sifted the salt and loaded it into handcarts. When the carts were full, most of the group would stay behind, taking shelter amid rocks and simple lean-tos, while a band of fifteen or so of the heartier members set out on the path that ran alongside the river.Lara had been back and forth along the river path many times in her short life. Her people had not created the path—it had always been there, like the river—but their deerskin-shod feet and the wooden wheels of their handcarts kept the path well worn. Lara’s people were salt traders, and their livelihood took them on a continual journey.\r\nAt the mouth of the river, the little group of half a dozen intermingled families gathered salt from the great salt beds beside the sea. They groomed and sifted the salt and loaded it into handcarts. When the carts were full, most of the group would stay behind, taking shelter amid rocks and simple lean-tos, while a band of fifteen or so of the heartier members set out on the path that ran alongside the river.', 'article 1.png', '2021-03-29', 5),
(10, 'Article 3', 'Laravel Movie', 'ExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExampleExample', 'Article 3.png', '2021-04-01', 5);

-- --------------------------------------------------------

--
-- Table structure for table `publish_audio`
--

CREATE TABLE `publish_audio` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `publishAt` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publish_audio`
--

INSERT INTO `publish_audio` (`id`, `title`, `publisher`, `content`, `image`, `publishAt`, `user_id`) VALUES
(5, 'audio 1', 'Laravel Movie', 'audio 1.mp3', 'audio 1.png', '2021-03-29', 5),
(6, 'audio 2', 'Laravel Movie', 'audio 2.mp3', 'audio 2.png', '2021-03-29', 5);

-- --------------------------------------------------------

--
-- Table structure for table `publish_video`
--

CREATE TABLE `publish_video` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `publishAt` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publish_video`
--

INSERT INTO `publish_video` (`id`, `title`, `publisher`, `content`, `image`, `publishAt`, `user_id`) VALUES
(4, 'video 1', 'Laravel Movie', 'video 1.mp4', 'video 1.png', '2021-03-29', 5),
(5, 'video 2', 'Laravel Movie', 'video 2.mp4', 'video 2.png', '2021-03-29', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `fname`, `lname`, `phone`, `image`) VALUES
(1, 'news.collect2021@gmail.com', 'admin', 'admin', 9072548245, ''),
(5, 'laravelmovie@gmail.com', 'Laravel', 'Movie', 9072548263, 'https://lh6.googleusercontent.com/-2aYE62Zw2NQ/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucl6X8VAN5wLYch-xxGc0NfOTAwzkQ/s96-c/photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_listenapi_fav`
--

CREATE TABLE `user_listenapi_fav` (
  `user_id` int(11) NOT NULL,
  `listenapi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_listenapi_fav`
--

INSERT INTO `user_listenapi_fav` (`user_id`, `listenapi_id`) VALUES
(5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_newsapi_fav`
--

CREATE TABLE `user_newsapi_fav` (
  `user_id` int(11) NOT NULL,
  `newsapi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_newsapi_fav`
--

INSERT INTO `user_newsapi_fav` (`user_id`, `newsapi_id`) VALUES
(4, 12),
(5, 15);

-- --------------------------------------------------------

--
-- Table structure for table `user_pubarticle_fav`
--

CREATE TABLE `user_pubarticle_fav` (
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_pubarticle_fav`
--

INSERT INTO `user_pubarticle_fav` (`user_id`, `article_id`) VALUES
(5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_pubaudio_fav`
--

CREATE TABLE `user_pubaudio_fav` (
  `user_id` int(11) NOT NULL,
  `audio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_pubaudio_fav`
--

INSERT INTO `user_pubaudio_fav` (`user_id`, `audio_id`) VALUES
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_pubvideo_fav`
--

CREATE TABLE `user_pubvideo_fav` (
  `user_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_pubvideo_fav`
--

INSERT INTO `user_pubvideo_fav` (`user_id`, `video_id`) VALUES
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_ytapi_fav`
--

CREATE TABLE `user_ytapi_fav` (
  `user_id` int(11) NOT NULL,
  `ytapi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_ytapi_fav`
--

INSERT INTO `user_ytapi_fav` (`user_id`, `ytapi_id`) VALUES
(1, 13),
(4, 2),
(4, 28),
(4, 25),
(5, 25),
(5, 24);

-- --------------------------------------------------------

--
-- Table structure for table `weatherapi`
--

CREATE TABLE `weatherapi` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `temp` varchar(255) NOT NULL,
  `feels_like` varchar(255) NOT NULL,
  `humidity` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lon` varchar(255) NOT NULL,
  `db_hour` int(11) NOT NULL,
  `db_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weatherapi`
--

INSERT INTO `weatherapi` (`id`, `name`, `image`, `description`, `temp`, `feels_like`, `humidity`, `lat`, `lon`, `db_hour`, `db_date`) VALUES
(1, 'Alaminos', '01n', 'clear sky', '28.33', '31.62', '72', '14.0639', '121.2465', 20, '2021-04-03'),
(2, 'Angeles', '03d', 'scattered clouds', '18.99', '16.24', '77', '9.9959', '-84.0513', 20, '2021-04-03'),
(3, 'Antipolo', '02n', 'few clouds', '28.5', '31.66', '70', '14.5864', '121.1753', 20, '2021-04-03'),
(4, 'Bacolod', '04n', 'overcast clouds', '27.15', '29.29', '72', '10.6667', '122.95', 20, '2021-04-03'),
(5, 'Bago', '04n', 'broken clouds', '31', '40.52', '79', '17.3367', '96.4797', 20, '2021-04-03'),
(6, 'Baguio', '02n', 'few clouds', '17.19', '17.37', '79', '16.4164', '120.5931', 20, '2021-04-03'),
(7, 'Bais', '02n', 'few clouds', '29', '33.97', '79', '9.5911', '123.1228', 20, '2021-04-03'),
(8, 'Balanga', '02n', 'few clouds', '28', '31.14', '69', '14.7167', '120.45', 20, '2021-04-03'),
(9, 'Batangas', '01n', 'clear sky', '27.78', '31.66', '77', '13.7594', '121.06', 20, '2021-04-03'),
(10, 'Bayawan', '02n', 'few clouds', '29', '33.97', '79', '9.3636', '122.8011', 20, '2021-04-03'),
(11, 'Butuan', '04n', 'overcast clouds', '24.82', '29.35', '89', '8.9492', '125.5436', 20, '2021-04-03'),
(12, 'Cabanatuan', '03n', 'scattered clouds', '29', '31.92', '58', '15.4869', '120.9675', 20, '2021-04-03'),
(13, 'Cadiz', '04d', 'broken clouds', '20.34', '19.3', '56', '36.5', '-5.75', 20, '2021-04-03'),
(14, 'Cagayan de Oro', '04n', 'overcast clouds', '26.05', '30.32', '83', '8.4822', '124.6472', 20, '2021-04-03'),
(15, 'Calamba', '02n', 'few clouds', '28.73', '32.01', '70', '14.2117', '121.1653', 20, '2021-04-03'),
(16, 'Calapan', '01n', 'clear sky', '27.78', '31.14', '77', '13.4117', '121.1803', 20, '2021-04-03'),
(17, 'Calbayog', '01n', 'clear sky', '25.19', '27.67', '87', '12.0672', '124.6042', 20, '2021-04-03'),
(18, 'Caloocan', '02n', 'few clouds', '29.08', '32.55', '70', '14.6571', '120.9841', 20, '2021-04-03'),
(19, 'Candon', '02n', 'few clouds', '26.79', '31.97', '85', '17.1947', '120.4517', 20, '2021-04-03'),
(20, 'Canlaon', '04n', 'overcast clouds', '22.9', '23.28', '78', '10.3864', '123.1964', 20, '2021-04-03'),
(21, 'Cauayan', '04n', 'overcast clouds', '27.78', '31.42', '79', '9.9718', '122.6249', 20, '2021-04-03'),
(22, 'Cavite', '02n', 'few clouds', '28.74', '32.03', '70', '14.4825', '120.9169', 20, '2021-04-03'),
(23, 'Cebu', '02n', 'few clouds', '28', '31.9', '78', '10.3167', '123.8907', 20, '2021-04-03'),
(24, 'Cotabato', '04n', 'overcast clouds', '27.04', '30.12', '83', '7.2236', '124.2464', 20, '2021-04-03'),
(25, 'Dagupan', '01n', 'clear sky', '24.71', '25.9', '67', '17.7061', '121.5047', 20, '2021-04-03'),
(26, 'Danao', '02n', 'few clouds', '28', '31.8', '78', '10.5208', '124.0272', 20, '2021-04-03'),
(27, 'Dapitan', '04n', 'overcast clouds', '27.21', '30.54', '83', '8.6464', '123.4208', 20, '2021-04-03'),
(28, 'Davao', '04n', 'broken clouds', '29', '33.49', '74', '6.813', '125.7085', 20, '2021-04-03'),
(29, 'Digos', '04n', 'broken clouds', '29', '34.03', '74', '6.7497', '125.3572', 20, '2021-04-03'),
(30, 'Dipolog', '04n', 'overcast clouds', '26.66', '29.57', '85', '8.5894', '123.3414', 20, '2021-04-03'),
(31, 'Dumaguete', '02n', 'few clouds', '29', '33.97', '79', '9.3103', '123.3081', 20, '2021-04-03'),
(32, 'Escalante', '04n', 'broken clouds', '27.01', '29.3', '75', '10.8167', '123.5', 20, '2021-04-03'),
(33, 'Gapan', '03n', 'scattered clouds', '29.2', '31.06', '58', '15.2833', '120.9833', 20, '2021-04-03'),
(34, 'General Santos', '04n', 'overcast clouds', '27.15', '30.08', '80', '6.1128', '125.1717', 20, '2021-04-03'),
(35, 'Gingoog', '04n', 'overcast clouds', '25.57', '30.97', '89', '8.8243', '125.1042', 20, '2021-04-03'),
(36, 'Himamaylan', '04n', 'overcast clouds', '26.05', '29.66', '83', '10.0667', '122.9167', 20, '2021-04-03'),
(37, 'Iligan', '04n', 'overcast clouds', '25.62', '26.46', '85', '8.2282', '124.2412', 20, '2021-04-03'),
(38, 'Iloilo', '04n', 'overcast clouds', '27.14', '28.01', '72', '10.6969', '122.5644', 20, '2021-04-03'),
(39, 'Iriga', '04d', 'broken clouds', '5', '-1.16', '75', '56.9497', '24.1042', 20, '2021-04-03'),
(40, 'Isabela', '03n', 'scattered clouds', '27', '30.63', '89', '6.7085', '121.9711', 20, '2021-04-03'),
(41, 'Kabankalan', '04n', 'overcast clouds', '27.2', '30.51', '83', '9.9889', '122.8122', 20, '2021-04-03'),
(42, 'Kidapawan', '04n', 'broken clouds', '29', '33.49', '74', '7.0083', '125.0894', 20, '2021-04-03'),
(43, 'Koronadal', '04n', 'overcast clouds', '25.89', '26.83', '88', '6.5031', '124.8469', 20, '2021-04-03'),
(44, 'La Carlota', '04n', 'overcast clouds', '27.22', '29.52', '73', '10.4233', '122.9208', 20, '2021-04-03'),
(45, 'Laoag', '02n', 'few clouds', '28', '33.24', '83', '18.1989', '120.5936', 20, '2021-04-03'),
(46, 'Lapu-Lapu', '02n', 'few clouds', '28', '31.8', '78', '10.3103', '123.9494', 20, '2021-04-03'),
(47, 'Las Piñas', '02n', 'few clouds', '28.55', '31.74', '70', '14.4506', '120.9828', 20, '2021-04-03'),
(48, 'Legazpi', '04d', 'overcast clouds', '10.74', '5.82', '74', '43.0532', '-2.3369', 20, '2021-04-03'),
(49, 'Ligao', '01n', 'clear sky', '23.78', '24.51', '88', '13.2403', '123.5325', 20, '2021-04-03'),
(50, 'Lipa', '04d', 'overcast clouds', '4.65', '3.77', '72', '49.5542', '15.5447', 20, '2021-04-03'),
(51, 'Lucena', '01n', 'clear sky', '27.78', '31.66', '77', '13.9314', '121.6172', 20, '2021-04-03'),
(52, 'Maasin', '04n', 'broken clouds', '26.45', '26.45', '78', '10.1336', '124.8447', 20, '2021-04-03'),
(53, 'Makati', '02n', 'few clouds', '28.8', '32.12', '70', '14.5569', '121.0235', 20, '2021-04-03'),
(54, 'Malabon', '01n', 'clear sky', '26.23', '26.23', '81', '15.6361', '119.9379', 20, '2021-04-03'),
(55, 'Malaybalay', '04n', 'overcast clouds', '20.38', '20.98', '96', '8.15', '125.0833', 20, '2021-04-03'),
(56, 'Malolos', '02n', 'few clouds', '28.96', '32.36', '70', '14.8419', '120.8117', 20, '2021-04-03'),
(57, 'Malolos', '02n', 'few clouds', '28.96', '32.36', '70', '14.8419', '120.8117', 20, '2021-04-03'),
(58, 'Mandaluyong', '02n', 'few clouds', '28.81', '32.32', '70', '14.5833', '121.0333', 20, '2021-04-03'),
(59, 'Mandaue', '02n', 'few clouds', '28', '31.9', '78', '10.3437', '123.9423', 20, '2021-04-03'),
(60, 'Manila', '02n', 'few clouds', '29.11', '32.97', '70', '14.6042', '120.9822', 20, '2021-04-03'),
(61, 'Maragondon', '02n', 'few clouds', '28.73', '32.15', '70', '14.2333', '120.7167', 20, '2021-04-03'),
(62, 'Marawi', '04n', 'overcast clouds', '20.93', '21.61', '97', '7.9986', '124.2928', 20, '2021-04-03'),
(63, 'Masbate', '02n', 'few clouds', '26.73', '28.68', '78', '12.3667', '123.6167', 20, '2021-04-03'),
(64, 'Muntinlupa', '02n', 'few clouds', '28.52', '31.69', '70', '14.3941', '121.041', 20, '2021-04-03'),
(65, 'Naga', '01n', 'clear sky', '25.02', '27.7', '85', '13.6192', '123.1814', 20, '2021-04-03'),
(66, 'Olongapo', '02n', 'few clouds', '28', '30.54', '69', '14.8292', '120.2828', 20, '2021-04-03'),
(67, 'Ormoc', '02n', 'few clouds', '25.33', '26.14', '85', '11.0064', '124.6075', 20, '2021-04-03'),
(68, 'Oroquieta', '04n', 'overcast clouds', '26.28', '31.14', '90', '8.4858', '123.8044', 20, '2021-04-03'),
(69, 'Pagadian', '04n', 'overcast clouds', '25.73', '26.53', '83', '7.8257', '123.437', 20, '2021-04-03'),
(70, 'Palayan', '03n', 'scattered clouds', '29', '31.92', '58', '15.5409', '121.0843', 20, '2021-04-03'),
(71, 'Legazpi', '04d', 'overcast clouds', '10.74', '5.82', '74', '43.0532', '-2.3369', 20, '2021-04-03'),
(72, 'Parañaque', '02n', 'few clouds', '28.8', '32.3', '70', '14.5007', '120.9915', 20, '2021-04-03'),
(73, 'Pasay', '02n', 'few clouds', '28.82', '32.34', '70', '14.5438', '120.9955', 20, '2021-04-03'),
(74, 'Pasig', '02n', 'few clouds', '28.78', '32.25', '70', '14.587', '121.065', 20, '2021-04-03'),
(75, 'Passi', '03n', 'scattered clouds', '24.55', '25.15', '80', '11.15', '122.65', 20, '2021-04-03'),
(76, 'Puerto Princesa', '03n', 'scattered clouds', '30', '34.88', '74', '9.7392', '118.7353', 20, '2021-04-03'),
(77, 'Quezon', '03n', 'scattered clouds', '24.45', '27.92', '86', '7.7303', '125.0989', 20, '2021-04-03'),
(78, 'Roxas', '03n', 'scattered clouds', '26.59', '30.48', '81', '11.5853', '122.7511', 20, '2021-04-03'),
(79, 'Sagay', '03n', 'scattered clouds', '27.63', '30.68', '76', '10.9447', '123.4242', 20, '2021-04-03'),
(80, 'San Carlos', '04d', 'broken clouds', '27.62', '29.16', '56', '9.6612', '-68.5827', 20, '2021-04-03'),
(81, 'San Carlos', '04d', 'broken clouds', '27.62', '29.16', '56', '9.6612', '-68.5827', 20, '2021-04-03'),
(82, 'Pangasinan', '04n', 'overcast clouds', '24.83', '30.25', '95', '-7.4066', '108.5292', 20, '2021-04-03'),
(83, 'San Fernando', '03n', 'scattered clouds', '29', '31.92', '58', '15.0286', '120.6898', 20, '2021-04-03'),
(84, 'La Union', '04d', 'broken clouds', '23.81', '23.93', '66', '-5.4', '-80.75', 20, '2021-04-03'),
(85, 'San Fernando', '03n', 'scattered clouds', '29', '31.92', '58', '15.0286', '120.6898', 20, '2021-04-03'),
(86, 'San Jose', '04n', 'overcast clouds', '10.04', '8.95', '71', '37.3394', '-121.895', 20, '2021-04-03'),
(87, 'San Jose del Monte', '02n', 'few clouds', '28.96', '32.64', '70', '14.8167', '121.1167', 20, '2021-04-03'),
(88, 'San Pablo', '01n', 'clear sky', '28.31', '32.38', '77', '14.0669', '121.3258', 20, '2021-04-03'),
(89, 'Santa Rosa', '02n', 'few clouds', '28.72', '32.13', '70', '14.3122', '121.1114', 20, '2021-04-03'),
(90, 'Santiago', '01d', 'clear sky', '13.02', '12.65', '87', '-33.4569', '-70.6483', 20, '2021-04-03'),
(91, 'Silay', '04n', 'overcast clouds', '27.07', '29.06', '71', '10.798', '122.9757', 20, '2021-04-03'),
(92, 'Sipalay', '04n', 'overcast clouds', '26.66', '26.66', '82', '9.75', '122.5', 20, '2021-04-03'),
(93, 'Sorsogon', '01n', 'clear sky', '25.94', '26.73', '82', '12.9739', '123.9933', 20, '2021-04-03'),
(94, 'Surigao', '04n', 'overcast clouds', '26.5', '26.5', '81', '9.7839', '125.4889', 20, '2021-04-03'),
(95, 'Tabaco', '01n', 'clear sky', '25.55', '26.33', '83', '13.3333', '123.7167', 20, '2021-04-03'),
(96, 'Tacloban', '01n', 'clear sky', '24.89', '25.65', '85', '11.243', '125.0081', 20, '2021-04-03'),
(97, 'Tacurong', '04n', 'broken clouds', '26.26', '26.26', '81', '6.6833', '124.6833', 20, '2021-04-03'),
(98, 'Tagaytay', '02n', 'few clouds', '28.73', '32.15', '70', '14.115', '120.9636', 20, '2021-04-03'),
(99, 'Tagbilaran', '04n', 'overcast clouds', '27.17', '30.19', '81', '9.6475', '123.8556', 20, '2021-04-03'),
(100, 'Tagum', '04n', 'broken clouds', '29', '33.49', '74', '7.4478', '125.8078', 20, '2021-04-03'),
(101, 'Talisay', '02n', 'few clouds', '28', '31.8', '78', '10.2447', '123.8494', 20, '2021-04-03'),
(102, 'Cebu', '02n', 'few clouds', '28', '31.9', '78', '10.3167', '123.8907', 20, '2021-04-03'),
(103, 'Talisay', '02n', 'few clouds', '28', '31.8', '78', '10.2447', '123.8494', 20, '2021-04-03'),
(104, 'Tanauan', '02n', 'few clouds', '28.73', '32.01', '70', '14.0863', '121.1498', 20, '2021-04-03'),
(105, 'Tangub', '04n', 'overcast clouds', '25.29', '26.17', '88', '8.06', '123.75', 20, '2021-04-03'),
(106, 'Tanjay', '02n', 'few clouds', '29', '34.53', '79', '9.5153', '123.1583', 20, '2021-04-03'),
(107, 'Tarlac', '03n', 'scattered clouds', '29', '31.92', '58', '15.4889', '120.5986', 20, '2021-04-03'),
(108, 'Taguig', '02n', 'few clouds', '28.74', '32.03', '70', '14.5243', '121.0792', 20, '2021-04-03'),
(109, 'Toledo', '04d', 'broken clouds', '17.22', '16.38', '53', '39.8333', '-4', 20, '2021-04-03'),
(110, 'Trece Martires', '02n', 'few clouds', '28.73', '32.15', '70', '14.2794', '120.8673', 20, '2021-04-03'),
(111, 'Tuguegarao', '01n', 'clear sky', '25.99', '25.99', '65', '17.6131', '121.7269', 20, '2021-04-03'),
(112, 'Urdaneta', '01n', 'clear sky', '26.78', '28.79', '74', '15.9761', '120.5711', 20, '2021-04-03'),
(113, 'Valencia', '02d', 'few clouds', '23.42', '22.81', '38', '39.3333', '-0.8333', 20, '2021-04-03'),
(114, 'Valenzuela', '03d', 'scattered clouds', '21.06', '19.64', '49', '37.7756', '-4.2204', 20, '2021-04-03'),
(115, 'Victorias', '04n', 'broken clouds', '27.12', '29.42', '74', '10.9', '123.0778', 20, '2021-04-03'),
(116, 'Vigan', '02n', 'few clouds', '28', '33.24', '83', '17.5747', '120.3869', 20, '2021-04-03'),
(117, 'Zamboanga', '03n', 'scattered clouds', '27', '30.63', '89', '6.9103', '122.0739', 20, '2021-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `ytapi`
--

CREATE TABLE `ytapi` (
  `id` int(11) NOT NULL,
  `vid_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `channel` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `publishAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ytapi`
--

INSERT INTO `ytapi` (`id`, `vid_id`, `title`, `channel`, `image`, `publishAt`) VALUES
(1, 'CILeb-Trna4', 'Alpha News Philippines Live', 'Alpha News Philippines', 'https://i.ytimg.com/vi/CILeb-Trna4/hqdefault.jpg', '2021-03-08'),
(2, 'PqZUHroWB1Q', 'PHILIPPINES FA50 IN ACTION | MILITARY NEWS', 'GipaTV Military Channel', 'https://i.ytimg.com/vi/PqZUHroWB1Q/hqdefault.jpg', '2021-03-08'),
(3, 'fDuTorhSn48', 'AMERICA TULOY ANG PAGBENTA NG ARMAS SA PILIPINAS | PHILIPPINES HAS A STRONG MESSAGE TO CHINA', 'GOOD News Philippines', 'https://i.ytimg.com/vi/fDuTorhSn48/hqdefault.jpg', '2021-03-08'),
(4, 'FRr9yZ16x90', 'Above and beyond: Dito Telecommunity | News Night', 'CNN Philippines', 'https://i.ytimg.com/vi/FRr9yZ16x90/hqdefault.jpg', '2021-03-08'),
(5, '4wSgTQ92D3M', 'Pasada sa Teleradyo | Teleradyo (8 March 2021)', 'ABS-CBN News', 'https://i.ytimg.com/vi/4wSgTQ92D3M/hqdefault.jpg', '2021-03-08'),
(6, 'Iya0pSyFYxE', 'Hot News | Technology Modernization of Philippines W4rships granting Russia | aboard US W4rships', 'NET MILITARY', 'https://i.ytimg.com/vi/Iya0pSyFYxE/hqdefault.jpg', '2021-03-08'),
(7, 'KJ6MZ437x6M', 'Dateline Philippines | ANC (8 March 2021)', 'ABS-CBN News', 'https://i.ytimg.com/vi/KJ6MZ437x6M/hqdefault.jpg', '2021-03-08'),
(8, 'i76agyGLNcs', 'Latest Good News Russia Eyes Bilateral Labor Agreement With Philippines', 'Max Legion', 'https://i.ytimg.com/vi/i76agyGLNcs/hqdefault.jpg', '2021-03-08'),
(9, 'S0WlUWNbmAY', 'JUST IN BALITA : PRES DUTERTE PAUPUIN siMARCOS PACQUIAO , NAPAAMIN siLENI NILAG LAG ang mga DILAW4N', 'BANAT NEWS TV', 'https://i.ytimg.com/vi/S0WlUWNbmAY/hqdefault.jpg', '2021-03-08'),
(10, 'An2lj9IQOec', 'BREAKING NEWS TODAY MARCH 8, 2021 PRES DUTERTE MAYOR SARA MAYOR ISKO LACSON 2022 JAM BUTATA SI LENI', 'DDS NEWSINFO', 'https://i.ytimg.com/vi/An2lj9IQOec/hqdefault.jpg', '2021-03-07'),
(11, 'TOiVGP5zb2Y', 'MAY UTTANG PERO MAY PROYEKTO! INTERNATIONAL CRUISE PORT SA PUERTO PRINCESA PATAPOS NA', 'GOOD News Philippines', 'https://i.ytimg.com/vi/TOiVGP5zb2Y/hqdefault.jpg', '2021-03-07'),
(12, 'p2rg_Gyh-MQ', 'BREAKING NEWS Philippine Army troops seize war materiel after clash with rebels in Apayao', 'Max Legion', 'https://i.ytimg.com/vi/p2rg_Gyh-MQ/hqdefault.jpg', '2021-03-15'),
(13, 'aIWnuHHp0-I', 'PNP at BFP, kailangan upang punuan ang pangangailangan sa contact tracers sa bansa', 'Radyo Pilipinas 738', 'https://i.ytimg.com/vi/aIWnuHHp0-I/hqdefault.jpg', '2021-03-16'),
(14, 'XZk57RjV4cE', 'JUST IN NEWS: PNP KUMILOS KOMUNISTANG ABOGADO FIDEL NOGRALES UMALMA | PRES.DUTERTE | MARCH 16,2021', 'Bayan Ko', 'https://i.ytimg.com/vi/XZk57RjV4cE/hqdefault.jpg', '2021-03-16'),
(15, 'tn0zsn43Sos', 'Nahulicam Ang Barilan ng PNP at sa Kampo ni Mayor Ronaldo Aquino ng Isang Residente sa Calbalyog.', 'Jed Chan TV', 'https://i.ytimg.com/vi/tn0zsn43Sos/hqdefault.jpg', '2021-03-16'),
(16, 'uoX34nAKoYA', 'PDEA vs PNP Ever Commonwealth shootouts', 'Yun Ang Sabi', 'https://i.ytimg.com/vi/uoX34nAKoYA/hqdefault.jpg', '2021-03-16'),
(17, 'n8lxGEugHC4', 'HUGE CHANGE IN ONTARIO PNP SYSTEM | LATEST IMMIGRATION NEWS', 'Brampton Immigration Consultancy', 'https://i.ytimg.com/vi/n8lxGEugHC4/hqdefault.jpg', '2021-03-15'),
(18, 'gUqsnh8Aq50', 'PNP or NPN proximity sensor explain in hindi .', 'B.S. Automobiles', 'https://i.ytimg.com/vi/gUqsnh8Aq50/hqdefault.jpg', '2021-03-15'),
(20, '-6cEGqIKeb4', 'DRAG X (VOOPOO), BASE RBA PNP,  RTA POD TANK E ADAPTADOR 510  - REVIEW COMPLETO', 'Nevasca Review', 'https://i.ytimg.com/vi/-6cEGqIKeb4/hqdefault.jpg', '2021-03-15'),
(21, '67l5HaRtcJY', 'LIVE! PNP Check sa BGC ngayong umiiral na ang unified curfew sa Metro Manila', 'SMNI News Channel', 'https://i.ytimg.com/vi/67l5HaRtcJY/hqdefault.jpg', '2021-03-15'),
(22, 'geWiaU36mFg', 'NIOS डीएलएड UPTET 2020 में मान्य होंगे? PNP Official News : UPTET EXAM DATE 2020', 'Electronic Study', 'https://i.ytimg.com/vi/geWiaU36mFg/hqdefault.jpg', '2021-03-15'),
(23, 'XDTSj7VWXnQ', 'About 2,300 PNP personnel deployed in Southern Metro Manila on first day of unified curfew | Saksi', 'GMA News', 'https://i.ytimg.com/vi/XDTSj7VWXnQ/hqdefault.jpg', '2021-03-15'),
(25, 'ppVBJco1b3I', 'Second batch of Sinovac vaccines donated by China arrives in the Philippines | 24 Oras', 'GMA News', 'https://i.ytimg.com/vi/ppVBJco1b3I/hqdefault.jpg', '2021-03-24'),
(27, 'nnyH3XYsiII', 'South China Sea dispute: Philippines wants Chinese ships to leave reef', 'Al Jazeera English', 'https://i.ytimg.com/vi/nnyH3XYsiII/hqdefault.jpg', '2021-03-24'),
(28, 'avDKTc7NBug', 'Bad news: China Ignores The Philippines Order, 183 Chinese Vessels Are Still in West Philippine Sea', 'US Military Tech', 'https://i.ytimg.com/vi/avDKTc7NBug/hqdefault.jpg', '2021-03-24'),
(29, 'nRZ81YYok7k', 'AMERIKA AT JAPAN SUPORTADO ANG PILIPINAS SA WEST PHILIPPINE SEA | CHINA AYAW UMALIS', 'GOOD News Philippines', 'https://i.ytimg.com/vi/nRZ81YYok7k/hqdefault.jpg', '2021-03-24'),
(30, 'DV9ei7jzOio', 'चीन फिलीपींस में भयंकर हालात | india china Philippines latest news today', 'Mission news24x7', 'https://i.ytimg.com/vi/DV9ei7jzOio/hqdefault.jpg', '2021-03-24'),
(31, 'oq_ZgOMcE68', 'Philippines demands withdrawal of China vessels from Julian Felipe Reef | BT', 'GMA News', 'https://i.ytimg.com/vi/oq_ZgOMcE68/hqdefault.jpg', '2021-03-24'),
(32, 'EFPUN8tTcQY', 'Second batch of Sinovac vaccines donated by China arrives in the Philippines | BT', 'GMA News', 'https://i.ytimg.com/vi/EFPUN8tTcQY/hqdefault.jpg', '2021-03-24'),
(33, 'hmbMixOmbD4', 'Dateline Philippines | ANC (24 March 2021)', 'ABS-CBN News', 'https://i.ytimg.com/vi/hmbMixOmbD4/hqdefault.jpg', '2021-03-24'),
(34, 'uKcVoDjvsdE', 'Dateline Philippines | ANC (3 April 2021)', 'ABS-CBN News', 'https://i.ytimg.com/vi/uKcVoDjvsdE/hqdefault.jpg', '2021-04-03'),
(35, 'ihMAnXS0Dbw', '117 empleyado ng Philippine Orthopedic Center, nagpositibo sa COVID-19 | 24 Oras News Alert', 'GMA News', 'https://i.ytimg.com/vi/ihMAnXS0Dbw/hqdefault.jpg', '2021-04-03'),
(36, 'nzIutSxCk_8', 'covid 19 update news today philippines live 2021', 'super vlogs', 'https://i.ytimg.com/vi/nzIutSxCk_8/hqdefault.jpg', '2021-04-03'),
(37, 'IjBZCva3WdY', 'BREAKING NEWS TODAY APRIL 3, 2021 PRES DUTERTE NAGALIT LENI RESIGN BBM SALUDO SA PANGULO', 'DDS NEWSINFO', 'https://i.ytimg.com/vi/IjBZCva3WdY/hqdefault.jpg', '2021-04-02'),
(38, 'Eq0CvPrgRos', 'Britain adds Philippines, three other countries to travel ‘red list’ | 24 Oras', 'GMA News', 'https://i.ytimg.com/vi/Eq0CvPrgRos/hqdefault.jpg', '2021-04-02'),
(39, 'VV_Y5gwVhHw', 'Mga ambulansya at sasakyan, pila raw minsan sa Lung Center | 24 Oras', 'GMA News', 'https://i.ytimg.com/vi/VV_Y5gwVhHw/hqdefault.jpg', '2021-04-02'),
(40, 'oo6wTlT9jOg', 'Philippines logs new all-time high 15,310 COVID-19 cases | 24 Oras', 'GMA News', 'https://i.ytimg.com/vi/oo6wTlT9jOg/hqdefault.jpg', '2021-04-02'),
(41, 'zU0DkBJthx0', '24 Oras Livestream: April 2, 2021 - Replay', 'GMA News', 'https://i.ytimg.com/vi/zU0DkBJthx0/hqdefault.jpg', '2021-04-02'),
(42, '3ctxavlQyEM', 'VIRAL NEWS : PRES DUTERTE GOODNEWS! DUTERTE AAKSYON NA SA IVERMECTIN! TULFO AT GADON ITO ANG LUNAS', 'PH BREAKING NEWS', 'https://i.ytimg.com/vi/3ctxavlQyEM/hqdefault.jpg', '2021-04-02'),
(43, '1XFuNHiS_7g', 'Philippines’ Project of the Century: Metro Manila Subway', 'UNTV News and Rescue', 'https://i.ytimg.com/vi/1XFuNHiS_7g/hqdefault.jpg', '2021-04-02'),
(44, 'cGyk98ajFcE', 'EXCLUSIVE NEWS : PRES DUTERTE GOODNEWS! MANNY PACQUIAO NAGHAMON NG SUNTUKAN LENI LUGAW BUMWELTA DU30', 'PH BREAKING NEWS', 'https://i.ytimg.com/vi/cGyk98ajFcE/hqdefault.jpg', '2021-04-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listenapi`
--
ALTER TABLE `listenapi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `newsapi`
--
ALTER TABLE `newsapi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `publish_article`
--
ALTER TABLE `publish_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publish_audio`
--
ALTER TABLE `publish_audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publish_video`
--
ALTER TABLE `publish_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `weatherapi`
--
ALTER TABLE `weatherapi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ytapi`
--
ALTER TABLE `ytapi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vid_id` (`vid_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listenapi`
--
ALTER TABLE `listenapi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `newsapi`
--
ALTER TABLE `newsapi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `publish_article`
--
ALTER TABLE `publish_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `publish_audio`
--
ALTER TABLE `publish_audio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `publish_video`
--
ALTER TABLE `publish_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `weatherapi`
--
ALTER TABLE `weatherapi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `ytapi`
--
ALTER TABLE `ytapi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
