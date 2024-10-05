# How to Use

## Navigate to the target directory
```bash
cd xx-vulnerable_application_name
```

## Build dan Run docker-compose:
```bash
sudo docker-compose up --build
```

## Stop and Delete previous Containers and Volumes (if any):
```bash
sudo docker-compose down -v
```

## Default Port Information
| Vulnerable Application Name                              | Port |
|----------------------------------------------------------|------|
| 00-reconnaissance-open_source_intelligence               | 9900 |
| 01-scanning_and_enumeration-website_enumeration          | 9901 |
| 02-scanning_and_enumeration-vulnerability_in_cms         | 9902 |
| 03-vulnerability_assessment-cve_2021_41773_case_study    | 9903 |
| 04-vulnerability_assessment-potential_vulnerability      | 9904 |
| 05-exploitation-parameter_tampering                      | 9905 |
| 06-exploitation-web_security_testing_guide               | 9906 |
| 07-exploitation-wstg_server_side_template_injection      | 9907 |
| 08-post_exploitation-backdoor_access                     | 9908 |
| 09-post_exploitation-privilege_escalation                | 9909 |
| 10-post_exploitation-network_exploration                 | 9910 |
