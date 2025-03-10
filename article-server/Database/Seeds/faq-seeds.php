<?php

require_once("../../connection/connection.php");

$query = 'INSERT INTO questions (question, answer) VALUES
("How did Flickr manage to deploy so frequently?", "Flickr achieved frequent deployments through strong collaboration between development and operations, extensive automation, careful change management, a culture of learning from failures, and a commitment to continuous improvement."),
("What role did automation play in Flickr""s deployment process?", "Automation was crucial in Flickr""s process, enabling them to handle tasks efficiently, reduce errors, and speed up deployments."),
("Why is collaboration between Dev and Ops important for frequent deployments?", "Collaboration ensures that both teams are aligned, share responsibilities, and work together to resolve issues, which is essential for maintaining a high deployment frequency."),
("How did Flickr handle failures during deployments?", "Flickr treated failures as learning opportunities, focusing on fixing problems rather than blaming individuals, which fostered a culture of continuous improvement."),
("What kind of changes did Flickr implement to ensure safe deployments?", "Flickr implemented careful changes using "switches" for new features, allowing them to control and manage the rollout of updates effectively."),
("What is the core idea of this report?", "The report centers on the strategy of achieving a high frequency of deployments in a company""s daily operations, emphasizing the importance of collaboration and communication between different teams to make this possible."),
("What key elements are crucial for achieving high deployment frequency?", "The report highlights the importance of team collaboration, the use of automation, shared responsibility, controlled releases, a culture that learns from mistakes, and effective communication tools."),
("What are the main conclusions of the report?", "The report concludes that teamwork, extensive automation, iterative feature deployment, learning from failures, and continuous process improvement are essential."),
("What are the main recommendations of the report?", "The report recommends adopting automation tools, using risk mitigation strategies, fostering strong team relationships, committing to continuous improvement, and understanding all aspects of the development and operations process."),
("How can a company achieve frequent and reliable deployments?", "A company can achieve this through strong teamwork, automating tasks, carefully managing changes, learning from mistakes, and consistently striving for improvement.");'
;