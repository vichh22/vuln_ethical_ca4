# Mini Project – Web Penetration Testing

## 1. Objective

The objective of this project is to identify, exploit, and document common web application vulnerabilities using industry-standard penetration testing tools in a controlled localhost environment.

---

## 2. Application Description

A custom-built vulnerable web application was developed using PHP and MariaDB.
The application contains intentionally implemented security flaws to demonstrate real-world attack scenarios.

---

## 3. Environment Used

- **Operating System:** Kali Linux
- **Web Server:** Apache
- **Database:** MariaDB
- **Application Language:** PHP
- **Target URL:** http://127.0.0.1/vulnlab/

---

## 4. Footprinting and Reconnaissance

The following tools were used to gather information about the target application:

- **Nmap:** Port and service discovery
- **Nikto:** Web server vulnerability scanning
- **Dirb:** Directory and file enumeration

---

## 5. Authentication Attacks

### 5.1 Burp Suite Login Bruteforce

Burp Suite was used to intercept login requests and perform a brute force attack on the authentication mechanism.

### 5.2 Hydra Login Bruteforce

Hydra was used to automate credential brute forcing using predefined username and password lists.
Valid credentials were successfully discovered, proving weak authentication controls.

---

## 6. Injection Attacks

### 6.1 Manual SQL Injection

SQL Injection was manually performed by injecting SQL queries into the login input fields.
This resulted in unauthorized authentication bypass.

### 6.2 SQL Injection Using SQLmap

SQLmap was used to automatically detect and exploit SQL Injection vulnerabilities.
The database structure and available databases were successfully enumerated.

---

## 7. Cross-Site Scripting (XSS)

XSS vulnerabilities were identified using both manual payload injection and automated scanning with XSSer.
Injected scripts were successfully executed in the browser.

---

## 8. Command Injection

A command injection vulnerability was identified in the application.
System commands were executed through user input, demonstrating improper input validation.

---

## 9. Results

Multiple vulnerabilities were successfully identified and exploited, including:

- Authentication bypass
- Database enumeration
- Script injection
- Remote command execution

These findings highlight serious security flaws in the application.

---

## 10. Conclusion

This project demonstrates the risks of insecure coding practices and improper input validation.
It emphasizes the importance of secure development practices, input sanitization, and layered security defenses in modern web applications.
