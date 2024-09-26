<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction to Scanning and Enumeration - Penetration Testing</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Introduction to Scanning and Enumeration</h1>
        <p class="text-center text-muted">Part of the Penetration Testing Process</p>
        
        <div class="mt-4">
            <h3>What is Scanning?</h3>
            <p>
                Scanning is a crucial step in the penetration testing process, where the goal is to gather more detailed information about the target system. 
                This phase involves using various tools and techniques to identify live systems, open ports, running services, and potential vulnerabilities. 
                Scanning is typically performed after the initial reconnaissance phase and helps in identifying specific points of entry that could be exploited.
            </p>
            <p>
                Common types of scanning include:
            </p>
            <ul>
                <li><strong>Port Scanning:</strong> Identifying open ports and the services running on them.</li>
                <li><strong>Vulnerability Scanning:</strong> Detecting known vulnerabilities in the system or applications.</li>
                <li><strong>Network Scanning:</strong> Mapping out the network topology and identifying connected devices.</li>
            </ul>
        </div>

        <div class="mt-5">
            <h3>What is Enumeration?</h3>
            <p>
                Enumeration is the next step after scanning, where the focus shifts to extracting more specific information from the target. 
                During enumeration, the tester actively engages with the target to gather detailed data about user accounts, network resources, 
                shares, and other valuable information that can be used for further exploitation. 
                Enumeration provides a deeper understanding of the target and often reveals sensitive information that was not apparent during the scanning phase.
            </p>
            <p>
                Common enumeration techniques include:
            </p>
            <ul>
                <li><strong>User Enumeration:</strong> Identifying valid user accounts on the system.</li>
                <li><strong>Network Enumeration:</strong> Discovering network shares, open services, and accessible devices.</li>
                <li><strong>Service Enumeration:</strong> Extracting detailed information about specific services, such as version numbers, configurations, and weaknesses.</li>
            </ul>
        </div>
    </div>
</body>
</html>
