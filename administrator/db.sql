-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 17, 2020 at 03:00 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `yannelle`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(120) NOT NULL,
  `titulo` varchar(120) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `link` varchar(120) NOT NULL,
  `ubicacion` varchar(120) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `titulo`, `descripcion`, `link`, `ubicacion`, `imagen`, `fecha`) VALUES
(8, 'RAIV Technologies Principal 1', 'Se vende publicidad a RAIV Technologies por $1000 al mes', 'https://raivtech.com', '1', 'publ1.png', '06-11-2020'),
(9, 'Cafe Principal Aside', 'Se vende publicidad a cafe por $1500 Principal Aside', 'https://ravitech.com', '3', 'publ2.png', '06-11-2020');

-- --------------------------------------------------------

--
-- Table structure for table `archivos`
--

CREATE TABLE `archivos` (
  `id` int(60) NOT NULL,
  `archivo` varchar(120) NOT NULL,
  `fecha` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `descripciones`
--

CREATE TABLE `descripciones` (
  `id` int(60) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `subcategoria` varchar(255) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `descripciones`
--

INSERT INTO `descripciones` (`id`, `categoria`, `subcategoria`, `descripcion`) VALUES
(4, 'tech', 'amazon', '<div><strong>Para todos amazon es bien feo</strong></div>'),
(5, 'tech', 'apple', '<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium reiciendis cupiditate minima unde praesentium, inventore molestias aut aspernatur quo, molestiae, rem quae ipsum incidunt labore delectus cum dolor beatae repudiandae?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non veritatis omnis dicta fugiat nam eveniet labore dolores, neque voluptates tempora ut quis corrupti libero aliquam ea vel quisquam accusantium voluptas?<br><br></div>'),
(6, 'tech', 'apple', '<div>Google</div>');

-- --------------------------------------------------------

--
-- Table structure for table `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(120) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `portada` varchar(255) NOT NULL,
  `contenido` text NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `subcategoria` varchar(255) NOT NULL,
  `fecha` varchar(120) NOT NULL,
  `editor` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `link_twitter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `titulo`, `subtitulo`, `portada`, `contenido`, `categoria`, `subcategoria`, `fecha`, `editor`, `twitter`, `link_twitter`) VALUES
(9, 'Apple will reportedly launch Arm-based MacBook Air and Pro laptops at ‘One More Thing’ event', 'Takeoff is scheduled for 6:24PM ET', 'EVBr3e7UwAAFMRN.0.0.webp', '<h1>FACEBOOK&nbsp;</h1><div>As of <strong>Thursday</strong> morning, a huge Facebook group called “Stop the Steal” was organizing rallies and fundraising to challenge election results across the US. <em>The</em> <em>group</em> accumulated more than 300,000 members in the less than 48 hours it existed before Facebook removed it on Thursday afternoon.<br><br></div><blockquote>“In line with the exceptional measures that we are taking during this period of heightened tension, we have removed the Group ‘Stop the Steal’ which was creating real-world events,” a Facebook company spokesperson said in a statement. “The group was organized around the delegitimization of the election process, and we saw worrying calls for violence from members of the group.”</blockquote><div><br>The Stop the Steal group, created on Wednesday, was littered with election misinformation accusing Democrats of plotting to steal the 2020 presidential election from President Donald Trump before it was taken down. Earlier on Thursday, <br><br>After a hectic preorder season, Sony today announced that there will be no PlayStation 5 consoles available for walk-in purchases at retail stores on the console’s launch date. The company shared the news via a tweet and <a href=\"https://blog.playstation.com/2020/11/05/playstation-5-launch-day-ordering-update/\">blog post</a> and is strongly discouraging eager gamers from lining up outside stores. If you do, it’ll be for nothing. “All day-of launch sales will be conducted through the online stores of our retail partners,” Sony’s Sid Shuman wrote in the blog post.<br><br></div><div>“No units will be available in-store for purchase on launch day (November 12th or November 19th, depending on your region) — please don’t plan on camping out or lining up at your local retailer on launch day in hopes of finding a PS5 console for purchase. Be safe, stay home, and place your order online,” he added.<br><br></div><div>Note that this <em>does not</em> impact orders placed for in-store pickup. If you’ve already preordered a PlayStation 5 with Best Buy, GameStop, Target, or another retailer and have been confirmed for launch day pickup, you’ll still be getting your new console without issue. But this is Sony taking steps to prevent unnecessary lines at retailers around the globe as the COVID-19 pandemic continues to stretch on.<br><br></div><div>Retailers, including Target in the US, have already been trying to get this online-only message across to consumers. Walmart plans to have <a href=\"http://goto.walmart.com/c/482924/565706/9383?u=https://www.walmart.com/cp/playstation-5/3475115?irgwc=1&amp;sourceid=imp_Xe4TM9x98xyLRzJwUx0Mo38KUkE2MuTQE1Jf180&amp;veh=aff&amp;wmlspartner=imp_1719813&amp;clickid=Xe4TM9x98xyLRzJwUx0Mo38KUkE2MuTQE1Jf180&amp;sharedid=&amp;sharedid=theverge.com&amp;subId2=[]vg[e]21314883[r]theverge.com[t]w[d]D\">four different windows of launch-day PlayStation 5 sales</a> at 12PM, 3PM, 6PM, and 9PM. Just last night, Amazon — after a long period of uncertainty — began updating PS5 preorders with estimated delivery dates. Many of them (including the Digital Edition PS5) are on target to hit the November 12th launch.<br><br></div><div>Sony’s announcement today technically only applies to the first day of sales, but it’s unlikely you’ll have an easy time finding a PS5 on the shelves at major retailers anytime soon.<br><br>After a hectic preorder season, Sony today announced that there will be no PlayStation 5 consoles available for walk-in purchases at retail stores on the console’s launch date. The company shared the news via a tweet and <a href=\"https://blog.playstation.com/2020/11/05/playstation-5-launch-day-ordering-update/\">blog post</a> and is strongly discouraging eager gamers from lining up outside stores. If you do, it’ll be for nothing. “All day-of launch sales will be conducted through the online stores of our retail partners,” Sony’s Sid Shuman wrote in the blog post.<br><br></div><div>“No units will be available in-store for purchase on launch day (November 12th or November 19th, depending on your region) — please don’t plan on camping out or lining up at your local retailer on launch day in hopes of finding a PS5 console for purchase. Be safe, stay home, and place your order online,” he added.<br><br></div><div>Note that this <em>does not</em> impact orders placed for in-store pickup. If you’ve already preordered a PlayStation 5 with Best Buy, GameStop, Target, or another retailer and have been confirmed for launch day pickup, you’ll still be getting your new console without issue. But this is Sony taking steps to prevent unnecessary lines at retailers around the globe as the COVID-19 pandemic continues to stretch on.<br><br></div><div>Retailers, including Target in the US, have already been trying to get this online-only message across to consumers. Walmart plans to have <a href=\"http://goto.walmart.com/c/482924/565706/9383?u=https://www.walmart.com/cp/playstation-5/3475115?irgwc=1&amp;sourceid=imp_Xe4TM9x98xyLRzJwUx0Mo38KUkE2MuTQE1Jf180&amp;veh=aff&amp;wmlspartner=imp_1719813&amp;clickid=Xe4TM9x98xyLRzJwUx0Mo38KUkE2MuTQE1Jf180&amp;sharedid=&amp;sharedid=theverge.com&amp;subId2=[]vg[e]21314883[r]theverge.com[t]w[d]D\">four different windows of launch-day PlayStation 5 sales</a> at 12PM, 3PM, 6PM, and 9PM. Just last night, Amazon — after a long period of uncertainty — began updating PS5 preorders with estimated delivery dates. Many of them (including the Digital Edition PS5) are on target to hit the November 12th launch.<br><br></div><div>Sony’s announcement today technically only applies to the first day of sales, but it’s unlikely you’ll have an easy time finding a PS5 on the shelves at major retailers anytime soon.<br><br></div>', 'tech', 'apple', 'Jueves 05 de Noviembre de 2020 3:37 pm', 'Ruben Castillo', '@rcastillo', ''),
(10, 'Facebook shuts down huge ‘Stop the Steal’ group', 'It accumulated more than 300,000 members', 'acastro_180720_1777_facebook_0001.0.webp', '<div>The Stop the Steal group, created on Wednesday, was littered with election misinformation accusing Democrats of plotting to steal the 2020 presidential election from President Donald Trump before it was taken down. Earlier on Thursday, <a href=\"https://www.motherjones.com/2020-elections/2020/11/stop-the-count-facebook-group/\"><em>Mother Jones </em>reported</a> that the group appeared to have been organized by Republican operatives and other people with ties to the tea party. The group also appeared to be linked to a group called Women for America First. This group was formed in 2019 to protest Trump’s impending impeachment, according to <em>Mother Jones</em>. One Women for America First co-founder, Amy Kremer, is a former tea party activist.<br><br></div><div>Over the last week, conspiracy theories regarding the 2020 presidential election have run rampant on platforms like Facebook and Twitter. The Stop the Steal Facebook group included many posts espousing debunked claims that election workers were throwing out ballots or that voters in Maricopa County in Arizona were asked to <a href=\"https://www.usatoday.com/story/news/factcheck/2020/11/04/fact-check-sharpiegate-controversy-arizona-false-claim/6164820002/\">vote with Sharpies</a> that would make their ballots illegible.<br><br></div><div>Before Facebook removed the group on Thursday, posts encouraged users to visit StolenElection.us. There, users were directed to add their names to what appeared to be a mailing list in case the Facebook group was removed. The website URL was registered to group called Liberty Lab, a conservative digital services firm, according to <em>Mother Jones</em>.<br><br><br></div>', 'tech', 'facebook', 'Jueves 05 de Noviembre de 2020 3:57 pm', 'Ruben Castillo', '@rcastillo', ''),
(11, 'Uber is still getting hammered by COVID, though things are looking slightly better', 'The company’s gross bookings only fell 10 percent year over year, compared to steeper drops in previous quarters', 'acastro_180927_1777_uber_0002.0.webp', '<div>Uber is still getting pummeled by COVID-19, as the raging pandemic continues to drag the company’s ride-hailing business down. Uber lost $1.1 billion over the last three months, with its adjusted net revenues down 20 percent compared to the third quarter of 2019.<br><br></div><div>Gross bookings in its ride-hailing division, or the amount of money it takes in before paying drivers, fell 50 percent year over year. It’s grim position, but also a steady improvement over the second quarter, in which Uber’s ride-hailing business was down 73 percent year over year. Still there was no mistaking the impact of the coronavirus pandemic on the company’s core transportation business. Uber brought in $2.8 billion in adjusted revenue, an 18 percent decline year over year.<br><br><br>Uber is still getting pummeled by COVID-19, as the raging pandemic continues to drag the company’s ride-hailing business down. Uber lost $1.1 billion over the last three months, with its adjusted net revenues down 20 percent compared to the third quarter of 2019.<br><br></div><div>Gross bookings in its ride-hailing division, or the amount of money it takes in before paying drivers, fell 50 percent year over year. It’s grim position, but also a steady improvement over the second quarter, in which Uber’s ride-hailing business was down 73 percent year over year. Still there was no mistaking the impact of the coronavirus pandemic on the company’s core transportation business. Uber brought in $2.8 billion in adjusted revenue, an 18 percent decline year over year.<br><br>Uber is still getting pummeled by COVID-19, as the raging pandemic continues to drag the company’s ride-hailing business down. Uber lost $1.1 billion over the last three months, with its adjusted net revenues down 20 percent compared to the third quarter of 2019.<br><br></div><div>Gross bookings in its ride-hailing division, or the amount of money it takes in before paying drivers, fell 50 percent year over year. It’s grim position, but also a steady improvement over the second quarter, in which Uber’s ride-hailing business was down 73 percent year over year. Still there was no mistaking the impact of the coronavirus pandemic on the company’s core transportation business. Uber brought in $2.8 billion in adjusted revenue, an 18 percent decline year over year.</div><div><br><br></div>', 'tech', 'code', 'Jueves 05 de Noviembre de 2020 4:04 pm', 'Ruben Castillo', '@rcastillo', ''),
(12, 'PlayStation 5 won’t be available for in-store purchase on launch day, Sony confirms', '‘Please don’t plan on camping out or lining up at your local retailer on launch day in hopes of finding a PS5 console’', 'vpavic_4261_20201023_0058.0.webp', '<div>After a hectic preorder season, Sony today announced that there will be no PlayStation 5 consoles available for walk-in purchases at retail stores on the console’s launch date. The company shared the news via a tweet and <a href=\"https://blog.playstation.com/2020/11/05/playstation-5-launch-day-ordering-update/\">blog post</a> and is strongly discouraging eager gamers from lining up outside stores. If you do, it’ll be for nothing. “All day-of launch sales will be conducted through the online stores of our retail partners,” Sony’s Sid Shuman wrote in the blog post.<br><br></div><div>“No units will be available in-store for purchase on launch day (November 12th or November 19th, depending on your region) — please don’t plan on camping out or lining up at your local retailer on launch day in hopes of finding a PS5 console for purchase. Be safe, stay home, and place your order online,” he added.<br><br></div><div>Note that this <em>does not</em> impact orders placed for in-store pickup. If you’ve already preordered a PlayStation 5 with Best Buy, GameStop, Target, or another retailer and have been confirmed for launch day pickup, you’ll still be getting your new console without issue. But this is Sony taking steps to prevent unnecessary lines at retailers around the globe as the COVID-19 pandemic continues to stretch on.<br><br></div><div>Retailers, including Target in the US, have already been trying to get this online-only message across to consumers. Walmart plans to have <a href=\"http://goto.walmart.com/c/482924/565706/9383?u=https://www.walmart.com/cp/playstation-5/3475115?irgwc=1&amp;sourceid=imp_Xe4TM9x98xyLRzJwUx0Mo38KUkE2MuTQE1Jf180&amp;veh=aff&amp;wmlspartner=imp_1719813&amp;clickid=Xe4TM9x98xyLRzJwUx0Mo38KUkE2MuTQE1Jf180&amp;sharedid=&amp;sharedid=theverge.com&amp;subId2=[]vg[e]21314883[r]theverge.com[t]w[d]D\">four different windows of launch-day PlayStation 5 sales</a> at 12PM, 3PM, 6PM, and 9PM. Just last night, Amazon — after a long period of uncertainty — began updating PS5 preorders with estimated delivery dates. Many of them (including the Digital Edition PS5) are on target to hit the November 12th launch.<br><br></div><div>Sony’s announcement today technically only applies to the first day of sales, but it’s unlikely you’ll have an easy time finding a PS5 on the shelves at major retailers anytime soon.<br><br></div>', 'tech', 'code', 'Jueves 05 de Noviembre de 2020 8:03 pm', 'Ruben Castillo', '@rcastillo', ''),
(14, 'NASA administrator says he plans to leave position under Biden administration', 'Jim Bridenstine says the NASA administrator should be close with the president', 'NHQ202011080008_large.0.webp', '<div><strong>NASA administrator Jim Bridenstine says he plans to leave his position at the space agency under the new Joe Biden administration, even if he’s asked to stay, </strong><a href=\"https://aviationweek.com/defense-space/space/nasa-chief-plans-step-aside-under-biden?utm_rid=CPEN1000000932171&amp;utm_campaign=26167&amp;utm_medium=email&amp;elq2=720db32d19c84ec7bf586abefa101e7c\"><strong>according to an interview he did with </strong><strong><em>Aviation Week</em></strong></a><strong>. Bridenstine said the decision would be to ensure NASA has the right leader who connects with the new president.<br><br></strong><a href=\"https://www.raivtech.com\">Google</a><strong><br></strong><br></div><blockquote>“What you need is somebody who has a close relationship with the president of the United States,” Bridenstine told <em>Aviation Week</em>. “You need somebody who is trusted by the administration…. including the OMB [Office of Management and Budget], the National Space Council and the National Security Council, and I think that I would not be the right person for that in a new administration.”</blockquote><div><br></div><div><a href=\"https://www.theverge.com/2017/9/2/16246760/trump-oklahoma-congressman-jim-bridenstine-nasa-administrator\">President Trump nominated Bridenstine</a>, then a Republican representative from Oklahoma, to lead NASA in 2017. Bridenstine’s confirmation <a href=\"https://www.theverge.com/2017/11/1/16580718/nasa-administrator-nomination-senate-hearing-rep-jim-bridenstine\">became a contentious one</a>, with many lawmakers decrying the idea of a politician running a scientific agency like NASA. “NASA is one of the last refuges from partisan politics,” former Sen. Bill Nelson (D-FL) said during Bridenstine’s confirmation hearing in November 2017. “NASA needs a leader who will unite us, not divide us. Respectfully, Congressman Bridenstine, I don’t think you’re that leader.”<br><br>Eventually, <a href=\"https://www.theverge.com/2018/4/19/17256146/nasa-administrator-jim-bridenstine-senate-confirmation\">the Senate did narrowly confirm him in April 2018</a>, with lawmakers voting along party lines. Since then, Bridenstine has been a very front-facing administrator, often in the public eye touting NASA’s biggest programs and accomplishments. His biggest endeavor has been spearheading NASA’s Artemis program, which aims to send the first woman to the Moon by 2024.<br><br></div><div>A lot of questions remain about how a Biden administration would oversee NASA, especially in regards to Artemis. The Biden campaign has said virtually nothing about how the president-elect would set space policy, other than noting that climate change and Earth science would be a big focus of the upcoming administration. In the meantime, President Trump refuses to concede his defeat in the recent election, which was called for Biden by major news outlets on November 7th. <a href=\"https://www.bloomberg.com/news/articles/2020-11-08/trump-to-biden-handoff-stalled-as-president-rejects-race-outcome\">That could complicate the access that a Biden transition team gets</a> to NASA and its facilities as the new administration prepares to take over.<br><br></div><div>Regardless of how the transition of power plays out, Bridenstine says he won’t be involved once Biden takes over. However, he tells <em>Aviation Week </em>that he thinks there is strong bipartisan support for Artemis. “We are in a good position as a country,” he said in the interview. “If you look at the bipartisan, apolitical support that we have from members of Congress on both sides of the aisle … there is strong support for Artemis.” The program has yet to receive a significant funding increase from Congress, though. A proposed budget bill from the House would not give a significant boost to NASA for the program, while the Senate has not provided details of how it would fund the space agency for next year.<br><br></div><div>In the meantime, Bridenstine says he doesn’t know what he will do next and that he hasn’t even started thinking about it. “After you’ve run NASA, to go from doing this to whatever I do next is going to be really hard,” he said. “This has been the greatest experience of my life by far, and I’m so grateful for it. But I am under no illusions. There are a lot of people that can do great work as the NASA administrator.”<br><br></div>', 'ciencia', 'espacio', 'Lunes 09 de Noviembre de 2020 2:32 pm', 'Alexandra Reyes', 'raivtech', ''),
(15, 'prueba', 'prueb', 'acastro_180720_1777_facebook_0001.0.webp', '<div>Prueba</div>', 'ciencia', 'espacio', 'Lunes 09 de Noviembre de 2020 2:37 pm', 'Alexandra Reyes', 'raivtech', 'https://twitter.com/soupsthename');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(60) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellido` varchar(120) NOT NULL,
  `correo` varchar(120) NOT NULL,
  `twitter` varchar(120) NOT NULL,
  `link_twitter` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `perfil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `twitter`, `link_twitter`, `password`, `perfil`) VALUES
(17, 'Ruben', 'Castillo', 'correo@correo.com', 'raivtech', '', '$2y$12$VZwUcJ6.VC/RJWR.cAUnG.kNAATtU6j7EN7l4aYSIq1AkmKhI5dai', 'ruben1.jpg'),
(18, 'Rubencito', 'Castillo', 'correo1@correo.com', 'rcastillo', '', '$2y$12$1vAusUkLFC93gDQpG.qRXOcqEycYAWmzVP9U3vhmo1jDQNF.hHsCS', 'asd.asd.nay.nae.jpg'),
(19, 'Alexandra', 'Reyes', 'correo2@correo.com', 'raivtech', 'https://twitter.com/soupsthename', '$2y$12$Laq0irx3uc0OJyZ9E3fq0.18lkMhIYOHZ4JsG2OyB9LfMmOemyLAO', 'gorilla.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `descripciones`
--
ALTER TABLE `descripciones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `descripciones`
--
ALTER TABLE `descripciones`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
