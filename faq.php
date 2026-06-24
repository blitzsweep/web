<?php require('parts/header.php'); ?>
<body>
    <?php require('parts/preloader.php'); ?>
    <div id="page" class="page">
        <?php require('parts/navbar.php'); ?>
        <?php require('parts/breadcrumb.php'); ?>
        <section class="pt-4 pb-80 faqs-3 inner-page-hero faqs-section division">
            <div class="container-xxl">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title title-01 mb-50">
                            <p class="fs-18 text-start m-0">Find comprehensive answers to common questions about BlitzSweep installation, system requirements, safety features, troubleshooting, and advanced usage scenarios for optimal Ubuntu/Debian system cleanup performance.</p>
                            <hr class="my-4">
                        </div>
                    </div>
                </div>
                <div class="faqs-3-questions">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="accordion-wrapper">
                                <ul class="accordion">
                                    <li class="accordion-item is-active wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">1. What system requirements does BlitzSweep have?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>BlitzSweep requires Ubuntu 22.04 LTS or newer, though it's compatible with Ubuntu 23.04, 23.10, 24.04, 24.10 and 26.04. Minimum system requirements include Python 3.12+, PyQt6 framework, and standard system utilities. The application needs approximately 100MB of disk space for installation and requires a graphical desktop environment (GNOME, KDE, XFCE, etc.) for the GUI interface. For optimal performance, we recommend at least 2GB RAM and a modern multi-core processor to handle large cleanup operations efficiently. Network connectivity is required for initial dependency installation but not for regular usage.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">2. Is BlitzSweep safe to use on my system?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>Yes, BlitzSweep is designed with multiple safety layers. It includes a mandatory Dry-Run mode that shows exactly what will be deleted before any actual removal occurs. The application uses system trash mechanisms for file deletion (when available), provides per-item selection capabilities, and implements an emergency stop button to halt operations instantly. For system-level tasks, it uses pkexec for proper privilege escalation with user confirmation. BlitzSweep also excludes critical system files, configuration directories, and user documents from cleanup operations by default, focusing only on cache files, temporary data, and log files that can be safely removed.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">3. How does the Dry-Run feature work?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>The Dry-Run feature is BlitzSweep's primary safety mechanism that scans and displays all files marked for deletion without actually removing anything. When activated, it performs a complete system scan according to your selected cleanup categories and presents a detailed list showing file paths, sizes, last modified dates, and total recoverable space. This preview allows you to review exactly what would be deleted, identify any files you might want to keep, and adjust your cleanup preferences accordingly. The Dry-Run results include color-coded indicators for different risk levels and provide estimated time savings for each cleanup category.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">4. What types of files does BlitzSweep clean?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>BlitzSweep targets several categories of non-essential files: User cache files from web browsers (Chrome, Firefox, Edge), application caches, thumbnail caches, and package manager caches. System temporary files from /tmp and /var/tmp directories, old log files (rotated logs), systemd journal entries beyond your specified retention period, and crash reports. Package manager leftovers including orphaned dependencies, old kernel versions (optional), and Snap/Flatpak revision history. Trash contents from all user accounts with size and age information displayed before cleanup. The application maintains a comprehensive exclusion list for critical system files and user documents.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">5. Does BlitzSweep require root privileges?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>BlitzSweep operates with a tiered privilege approach. Basic user-space cleanup (browser caches, user temporary files, local application data) requires no root access and runs with standard user permissions. System-level operations (journal cleanup, old kernel removal, system-wide package cleanup) require elevated privileges and use pkexec for secure privilege escalation with graphical authentication prompts. This approach minimizes security risks by limiting root access only to necessary operations. The application clearly indicates which tasks require administrative privileges and provides detailed explanations about why each elevated operation is necessary for complete system cleanup.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">6. How much disk space can I expect to recover?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>Disk space recovery varies significantly based on your usage patterns and system age. Typical recoveries range from 500MB to 5GB on average systems. New installations might recover 200-500MB primarily from package caches and temporary files. Moderate usage systems (3-6 months) typically recover 1-3GB from accumulated browser caches, application data, and log files. Heavily used systems or those with extended uptime can recover 5GB+ from extensive log accumulation, multiple kernel versions, and substantial cache buildup. The Dry-Run feature provides precise recovery estimates before any deletion occurs, broken down by category (cache, logs, packages, trash) with percentage indicators relative to your total disk capacity.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">7. Can I customize what gets cleaned?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>Yes, BlitzSweep offers extensive customization through its Preferences dialog. You can enable/disable individual cleanup categories: user cache files, browser histories, system temporary files, log files, package manager leftovers, and trash contents. Within each category, you can specify retention periods (keep files newer than X days), size limits, and exclusion patterns. The application also allows you to create custom cleanup patterns using wildcards and regular expressions for advanced users. All preferences are saved to ~/.config/blitzsweep/config and persist between sessions. You can also create multiple configuration profiles for different cleanup scenarios (quick cleanup, deep cleanup, safe cleanup).</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">8. How does journal log cleanup work?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>BlitzSweep's journal cleanup uses systemd's journalctl vacuum functions with user-configurable parameters. You can choose to clean by time retention (keep logs from last X days) or by size limits (keep logs under Y megabytes). The application displays current journal size before cleanup and estimated reduction. It uses proper systemd commands (journalctl --vacuum-time=, journalctl --vacuum-size=) to ensure compatibility and safety. Journal cleanup requires root privileges and is clearly indicated in the interface. The process preserves current session logs and maintains proper log rotation integrity. You can preview exactly which log time ranges will be removed before executing the cleanup operation.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">9. What about Snap and Flatpak cleanup?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>BlitzSweep handles both Snap and Flatpak package systems intelligently. For Snap packages, it removes old revisions beyond your specified retention count (default keeps 2 previous versions), cleans cache data, and removes orphaned dependencies. For Flatpak, it removes unused runtimes, cleans cache files, and optimizes storage. The application distinguishes between system-installed and user-installed packages, showing separate statistics for each. Before removal, it displays detailed information about what will be deleted including package names, versions, sizes, and last used dates. This cleanup can recover significant space (often 500MB-2GB) while maintaining all currently active package versions and dependencies.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">10. Can I schedule automatic cleanups?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>While BlitzSweep doesn't include built-in scheduling (to maintain simplicity and security), you can easily create scheduled cleanups using standard Linux tools. You can set up a cron job or systemd timer that runs BlitzSweep with specific command-line parameters for automated operations. The application supports command-line arguments for non-interactive mode, specific cleanup profiles, and output logging. For example: 'blitzsweep --profile quick --auto --log /var/log/blitzsweep.log'. We recommend testing any automated configuration thoroughly with Dry-Run mode first and implementing proper notification systems to monitor scheduled cleanups. Comprehensive documentation for automation is available in our GitHub repository.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">11. How are multiple user accounts handled?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>BlitzSweep intelligently handles multi-user systems through several approaches. For user-accessible operations, it can clean trash and cache files from all user accounts when run with appropriate privileges, showing separate statistics per user. The application respects file permissions and privacy boundaries—it doesn't access other users' personal files without proper authorization. When cleaning system-wide components (package caches, shared temporary files), it consolidates statistics across all users. The interface clearly indicates which operations affect multiple users and provides summary statistics showing space recovery distribution. For system administrators, this provides comprehensive cleanup across all accounts while maintaining individual user privacy and data security boundaries.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">12. What happens if I stop a cleanup mid-process?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>BlitzSweep implements graceful interruption handling through its Stop button and signal management. When stopped mid-cleanup, the application immediately halts all file operations, completes any in-progress deletions safely, and returns control to the interface. It maintains a transaction log of completed operations, allowing you to see exactly what was cleaned before interruption. The application doesn't leave partial deletions or corrupted files—it completes current file operations atomically before stopping. After interruption, you can review the partial results, adjust settings if needed, and resume cleanup from where it left off or start a new session. This ensures data integrity even during unexpected interruptions or user cancellations.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">13. Does it work with non-Ubuntu distributions?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>BlitzSweep is primarily developed for Ubuntu but maintains good compatibility with Debian-based distributions including Linux Mint, Pop!_OS, elementary OS, and Zorin OS. The application automatically detects your distribution and adjusts certain operations accordingly. Package manager cleanup adapts to your system's package management (APT for Debian/Ubuntu, potentially supporting others). File path detection adjusts for distribution-specific locations. However, some advanced features (like specific kernel cleanup methods) may be optimized for Ubuntu. We recommend testing with Dry-Run mode first on non-Ubuntu systems. Community feedback and compatibility reports for various distributions are welcome on our GitHub repository where we maintain a compatibility matrix.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">14. How does old kernel removal work?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>Old kernel removal is an optional feature that identifies and removes outdated kernel packages while keeping the current and one previous version for fallback purposes. BlitzSweep uses APT commands to safely identify unused kernels, checks bootloader configuration, and ensures at least one fallback kernel remains. The process includes verification steps to prevent removal of currently running or recently used kernels. Before removal, it displays detailed information about each kernel package including version, installation date, size, and whether it's currently bootable. This operation requires root privileges and provides significant space recovery (often 1-3GB). The feature is disabled by default and must be explicitly enabled in preferences after understanding the implications.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">15. What logging and reporting features exist?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>BlitzSweep provides comprehensive logging through multiple channels. The main interface shows real-time progress with file-by-file details during cleanup operations. A detailed session log records all actions with timestamps, file paths, sizes, and outcomes. You can enable verbose logging in preferences for troubleshooting, which includes system information, permission checks, and operation details. Logs are saved to ~/.cache/blitzsweep/logs/ with rotation management. The application also generates summary reports showing total space recovered, time saved, and category breakdowns. These reports can be exported as text or HTML for record-keeping. For system administrators, audit logs track privilege escalations and system-level operations with clear accountability trails.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">16. Can I exclude specific files or directories?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>Yes, BlitzSweep offers multiple exclusion mechanisms. You can add specific file paths, directory paths, or pattern-based exclusions using wildcards (*.config, /home/*/important/). Exclusions can be temporary (current session only) or permanent (saved to configuration). The application also supports regular expressions for advanced pattern matching. During Dry-Run, excluded items are clearly marked and not counted in recovery estimates. You can create exclusion presets for different scenarios (development work, specific applications, backup directories). Exclusions respect inheritance—excluding a directory excludes all contents recursively. The interface provides exclusion management with search, import/export, and validation features to ensure your exclusions work as intended before cleanup operations.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">17. How is performance during large cleanups?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>BlitzSweep is optimized for performance through several techniques: multi-threaded scanning for faster file discovery, progressive loading to maintain UI responsiveness, and efficient filesystem operations. During large cleanups (10GB+), the application uses chunked operations to prevent memory exhaustion and maintains a responsive interface with progress updates. Performance varies based on storage type (SSD vs HDD) and file count rather than total size—cleaning many small files may take longer than fewer large files. The application includes performance tuning options in preferences: scan depth limits, parallel operation counts, and I/O priority settings. Typical cleanups complete in 1-5 minutes depending on system speed and cleanup scope, with real-time progress indicators and time remaining estimates.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">18. What happens to recovered space reporting?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>Space recovery reporting in BlitzSweep is comprehensive and accurate. The application calculates recoverable space during Dry-Run using actual file sizes (not block allocation). During cleanup, it tracks actual deleted space accounting for hard links and sparse files. The interface shows real-time updates with a counter that increments as files are removed. Post-cleanup, it provides a detailed breakdown: cache files removed (browser, application, system), log files cleared, package leftovers deleted, and trash emptied. The report differentiates between "theoretical" recoverable space (file sizes) and "actual" recovered space (filesystem blocks freed). It also estimates performance improvement based on reduced filesystem metadata overhead. All statistics are saved to session logs for historical tracking and trend analysis.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">19. How do I troubleshoot installation issues?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>Common installation issues typically involve missing dependencies or permission problems. First, ensure your system meets minimum requirements: Ubuntu 22.04+, Python 3.12+, and internet access for package downloads. For DEB installation failures, run 'sudo apt-get install -f' to fix dependencies. For source installation issues, verify you have build-essential, python3-dev, and python3-venv packages. Check that PyQt6 is properly installed: 'python3 -c "import PyQt6; print(PyQt6.__version__)"'. Permission issues often stem from incomplete sudo privileges—ensure your user is in the sudo group. If problems persist, enable verbose logging during installation and check system logs. Our GitHub repository includes a comprehensive troubleshooting guide with solutions for common distribution-specific issues and community-reported problems.</p>
                                        </div>
                                    </li>
                                    <li class="accordion-item acc-last-item wow">
                                        <div class="accordion-thumb">
                                            <span class="main-font fs-20">20. Where can I get support or report issues?</span>
                                        </div>
                                        <div class="accordion-panel">
                                            <p>Primary support channels include our GitHub repository issue tracker for bug reports, feature requests, and technical questions. Before reporting issues, please check existing issues and the troubleshooting guide. Include detailed information: BlitzSweep version, distribution/version, Python version, error messages, and steps to reproduce. For community support, you can participate in discussions on relevant Linux forums and distribution-specific communities. The application includes built-in diagnostic tools: 'blitzsweep --diagnose' generates a system report for troubleshooting. For security vulnerabilities, please use GitHub's private reporting feature. We maintain regular updates with bug fixes and improvements—subscribe to repository notifications or check our release page for updates. Commercial support options may be available for enterprise deployments.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="more-questions">
                            <p class="fs-18">Can't find the answer to your question?</p>
                            <a rel="noreferrer nofollow noopener" target="_blank" href="https://github.com/blitzsweep/app/issues" class="btn btn-md r-08 btn--tra-black hover--purple">
                                <i class="fa-brands fa-github me-2"></i>
                                <span class="btn-text">
                                    <span class="anim-txt">Open GitHub Issue</span>
                                    <span class="anim-txt">Open GitHub Issue</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php require('parts/cta.php'); ?>
        <?php require('parts/footer.php'); ?>
        <?php require('parts/scripts.php'); ?>
    </div>
</body>
</html>