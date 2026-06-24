<?php require('parts/header.php'); ?>
<body>
    <?php require('parts/preloader.php'); ?>
    <div id="page" class="page">
        <?php require('parts/navbar.php'); ?>
        <section class="gr--cloud pb-120 inner-page-hero download download-section division">
            <div class="container-xxl">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9 col-xl-8">
                        <div class="section-title title-01 mb-50">
                            <h2 class="fs-68">Download <strong>BlitzSweep</strong></h2>
                            <p class="fs-18">Streamline your Ubuntu/Debian system maintenance with BlitzSweep - the intuitive GUI cleanup tool that removes unnecessary files, caches, and logs while keeping your system running smoothly.</p>
                            <div class="btns-group">
                                <a rel="noreferrer nofollow noopener" target="_blank" href="https://github.com/blitzsweep/app/releases/latest" class="btn btn-md r-08 btn--purple">
                                    <i class="fa-solid fa-download me-2"></i>
                                    <span class="btn-text">
                                        <span class="anim-txt">Download Latest Version</span>
                                        <span class="anim-txt">Download Latest Version</span>
                                    </span>
                                </a>
                                <a rel="noreferrer nofollow noopener" target="_blank" href="https://github.com/blitzsweep/app/tree/main" class="btn btn-md r-08 btn--tra-black hover--black">
                                    <i class="fa-brands fa-github me-2"></i>
                                    <span class="btn-text">
                                        <span class="anim-txt">View GitHub Repository</span>
                                        <span class="anim-txt">View GitHub Repository</span>
                                    </span>
                                </a>
                            </div>
                            <ul class="advantages clearfix">
                                <li><p>Open source and completely free</p></li>
                                <li><p>No root access required for basic cleanup</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="download-wrapper bg--02 bg--fixed hidd r-24">
                    <div class="d-flex justify-content-center p-5">
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="download-img wow">
                                    <img class="img-fluid" src="/uploads/pages/download/screen.png" alt="BlitzSweep GUI Interface showing help options">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-80">
                    <div class="col-lg-10">
                        <div class="section-title title-01 mb-50">
                            <h2 class="fs-52">Installation Guide</h2>
                            <p class="fs-18">Select your preferred installation approach to get BlitzSweep running on your system. BlitzSweep is optimized for Ubuntu 22.04, 23.04, 23.10, 24.04, 24.10 and 26.04. Our installation process includes comprehensive dependency management, automatic configuration, and post-installation verification to ensure a smooth setup experience.</p>
                        </div>
                        <div class="installation-methods r-16 mb-50">
                            <div class="method-tabs">
                                <div class="nav nav-tabs" role="tablist">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#deb-install" type="button">DEB Package</button>
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#source-install" type="button">Source Installation</button>
                                </div>
                                <div class="tab-content border-start border-end border-bottom bg--white py-5 px-4">
                                    <div class="tab-pane fade show active" id="deb-install">
                                        <h4 class="title-line-left fw-medium fs-6">Install from DEB Package (Recommended)</h4>
                                        <p class="mb-25">Download the latest DEB package and install using dpkg. This method automatically handles dependencies.</p>
                                        <div class="command-block mb-30">
                                            <h5 class="h6 fw-bold">1. Download the BlitzSweep package</h5>
                                            <p class="text-muted fs-14 mb-10">Downloads the latest BlitzSweep DEB package directly from GitHub releases repository (v5.1.9)</p>
                                            <div class="code-box r-10 overflow-hidden">
                                                <pre class="language-bash m-0"><code>wget https://github.com/blitzsweep/app/releases/download/v5.1.9/blitzsweep_5.1.9_all.deb</code></pre>
                                            </div>
                                        </div>
                                        <div class="command-block mb-30">
                                            <h5 class="h6 fw-bold">2. Install the DEB package</h5>
                                            <p class="text-muted fs-14 mb-10">Uses dpkg package manager with sudo privileges to install BlitzSweep system-wide on your Ubuntu system</p>
                                            <div class="code-box r-10 overflow-hidden">
                                                <pre class="language-bash m-0"><code>sudo dpkg -i blitzsweep_5.1.9_all.deb</code></pre>
                                            </div>
                                        </div>
                                        <div class="command-block mb-30">
                                            <h5 class="h6 fw-bold">3. Fix missing dependencies</h5>
                                            <p class="text-muted fs-14 mb-10">Automatically resolves any missing system dependencies that BlitzSweep requires for proper functionality</p>
                                            <div class="code-box r-10 overflow-hidden">
                                                <pre class="language-bash m-0"><code>sudo apt-get install -f</code></pre>
                                            </div>
                                        </div>
                                        <div class="command-block">
                                            <h5 class="h6 fw-bold">4. Launch BlitzSweep</h5>
                                            <p class="text-muted fs-14 mb-10">Starts the BlitzSweep application directly from terminal or search for it in your system application menu</p>
                                            <div class="code-box r-10 overflow-hidden">
                                                <pre class="language-bash m-0"><code>blitzsweep</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="source-install">
                                        <h4 class="title-line-left fw-medium fs-6">Install from Source</h4>
                                        <p class="mb-25">For developers or users who want the latest features. Requires Python 3.12+ and pip.</p>
                                        <div class="command-block mb-30">
                                            <h5 class="h6 fw-bold">1. Clone the repository</h5>
                                            <p class="text-muted fs-14 mb-10">Downloads the complete BlitzSweep source code repository from the official GitHub project page</p>
                                            <div class="code-box r-10 overflow-hidden">
                                                <pre class="language-bash m-0"><code>git clone https://github.com/blitzsweep/app.git</code></pre>
                                            </div>
                                        </div>
                                        <div class="command-block mb-30">
                                            <h5 class="h6 fw-bold">2. Navigate to directory</h5>
                                            <p class="text-muted fs-14 mb-10">Changes your current working directory to the BlitzSweep source code folder you just downloaded</p>
                                            <div class="code-box r-10 overflow-hidden">
                                                <pre class="language-bash m-0"><code>cd blitzsweep</code></pre>
                                            </div>
                                        </div>
                                        <div class="command-block mb-30">
                                            <h5 class="h6 fw-bold">3. Update package lists</h5>
                                            <p class="text-muted fs-14 mb-10">Refreshes your system's APT package repository information to ensure access to latest packages</p>
                                            <div class="code-box r-10 overflow-hidden">
                                                <pre class="language-bash m-0"><code>sudo apt update</code></pre>
                                            </div>
                                        </div>
                                        <div class="command-block mb-30">
                                            <h5 class="h6 fw-bold">4. Install system dependencies</h5>
                                            <p class="text-muted fs-14 mb-10">Installs all required system packages including Python Qt6 GUI framework bindings and trash utilities</p>
                                            <div class="code-box r-10 overflow-hidden">
                                                <pre class="language-bash m-0"><code>sudo apt install -y python3-pyqt6 python3-pyqt6.qt6-tools trash-cli</code></pre>
                                            </div>
                                        </div>
                                        <div class="command-block mb-30">
                                            <h5 class="h6 fw-bold">5. Upgrade Python package manager</h5>
                                            <p class="text-muted fs-14 mb-10">Ensures pip (Python package installer) is updated to latest version for reliable dependency installation</p>
                                            <div class="code-box r-10 overflow-hidden">
                                                <pre class="language-bash m-0"><code>python -m pip install --upgrade pip</code></pre>
                                            </div>
                                        </div>
                                        <div class="command-block mb-30">
                                            <h5 class="h6 fw-bold">6. Install Python dependencies</h5>
                                            <p class="text-muted fs-14 mb-10">Installs all required Python packages and libraries from the project's requirements.txt configuration file</p>
                                            <div class="code-box r-10 overflow-hidden">
                                                <pre class="language-bash m-0"><code>python -m pip install -r requirements.txt</code></pre>
                                            </div>
                                        </div>
                                        <div class="command-block mb-30">
                                            <h5 class="h6 fw-bold">7. Run BlitzSweep</h5>
                                            <p class="text-muted fs-14 mb-10">Starts the BlitzSweep application directly from Python source code without system-wide installation</p>
                                            <div class="code-box r-10 overflow-hidden">
                                                <pre class="language-bash m-0"><code>python main.py</code></pre>
                                            </div>
                                        </div>
                                        <div class="command-block">
                                            <h5 class="h6 fw-bold">8. Create desktop entry (Optional)</h5>
                                            <p class="text-muted fs-14 mb-10">Adds BlitzSweep to your system application menu for easy launching without using terminal commands</p>
                                            <div class="code-box r-10 overflow-hidden">
                                                <pre class="language-bash m-0"><code>sudo cp blitzsweep.desktop /usr/share/applications/</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fbox-8-wrapper pt-70 pb-70">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                        <div class="col">
                            <div class="fbox-8 fb-1 wow">
                                <div class="fbox-ico-wrap">
                                    <div class="fbox-ico color--purple ico-50">
                                        <span class="flaticon-scale"></span>
                                    </div>
                                </div>
                                <div class="fbox-txt">
                                    <p>Smart cleanup algorithms identify unnecessary files while preserving system stability and user data integrity throughout the process</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="fbox-8 fb-2 wow">
                                <div class="fbox-ico-wrap">
                                    <div class="fbox-ico color--purple ico-50">
                                        <span class="flaticon-layer"></span>
                                    </div>
                                </div>
                                <div class="fbox-txt">
                                    <p>Multi-layer safety features including dry-run mode, itemized previews, and emergency stop functionality prevent accidental data loss</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="fbox-8 fb-3 wow">
                                <div class="fbox-ico-wrap">
                                    <div class="fbox-ico color--purple ico-50">
                                        <span class="flaticon-robot"></span>
                                    </div>
                                </div>
                                <div class="fbox-txt">
                                    <p>Automated system with root task handling via pkexec and live progress tracking for optimized cleanup efficiency and resource oversight</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <div class="block-info wow">
                            <p class="main-font fs-18">Track latest improvements and system compatibility updates in the <a rel="noreferrer nofollow noopener" target="_blank" href="https://github.com/blitzsweep/app/releases" class="color--purple">Release Notes</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg--cloud py-120 mb-80 faqs-1 faqs-section division">
            <div class="container-xxl">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="faq-1-title">
                            <span class="module-subtitle">Common Questions</span>
                            <h2 class="fs-52">Frequently Asked Questions</h2>
                            <p class="fs-17">Find immediate answers to frequently asked questions about BlitzSweep's installation process, daily operational usage guidelines, advanced feature implementation, and comprehensive system compatibility requirements for different Linux distributions and desktop environments.</p>
                            <a href="/faq/" class="btn r-08 btn--purple">
                                <span class="btn-text">
                                    <span class="anim-txt">View All FAQs</span>
                                    <span class="anim-txt">View All FAQs</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion-wrapper">
                            <ul class="accordion">
                                <li class="accordion-item is-active wow">
                                    <div class="accordion-thumb">
                                        <span class="main-font fs-20">System requirements for BlitzSweep</span>
                                    </div>
                                    <div class="accordion-panel">
                                        <p>BlitzSweep requires Ubuntu 22.04+ or Debian-based systems with Python 3.12+, PyQt6, and standard system utilities. Minimum 2GB RAM recommended for optimal performance during cleanup operations.</p>
                                    </div>
                                </li>
                                <li class="accordion-item wow">
                                    <div class="accordion-thumb">
                                        <span class="main-font fs-20">Safety and data protection features</span>
                                    </div>
                                    <div class="accordion-panel">
                                        <p>BlitzSweep includes multiple safety layers: dry-run preview mode, per-item selection, user confirmation prompts, and emergency stop functionality. All trash operations use system trash mechanisms with recovery options.</p>
                                    </div>
                                </li>
                                <li class="accordion-item wow">
                                    <div class="accordion-thumb">
                                        <span class="main-font fs-20">Root privileges and permissions</span>
                                    </div>
                                    <div class="accordion-panel">
                                        <ul class="simple-list">
                                            <li class="list-item">
                                                <p>Standard user cleanup requires no root access - handles user cache, browser data, and temporary files without elevated privileges</p>
                                            </li>
                                            <li class="list-item">
                                                <p>System-level tasks (journal cleanup, kernel removal, package pruning) use pkexec for temporary privilege escalation with user confirmation</p>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="accordion-item wow">
                                    <div class="accordion-thumb">
                                        <span class="main-font fs-20">Supported distributions and compatibility</span>
                                    </div>
                                    <div class="accordion-panel">
                                        <p>Officially supports Ubuntu 22.04+, 23.04+, 24.04+, 26.04+ and Debian 11+. Community-tested on Linux Mint, Pop!_OS, elementary OS, and Zorin OS with full functionality across most Debian derivatives.</p>
                                    </div>
                                </li>
                                <li class="accordion-item acc-last-item wow">
                                    <div class="accordion-thumb">
                                        <span class="main-font fs-20">Troubleshooting and support resources</span>
                                    </div>
                                    <div class="accordion-panel">
                                        <ul class="simple-list">
                                            <li class="list-item">
                                                <p>Check the GitHub Issues page for known problems and community solutions to common installation and runtime challenges</p>
                                            </li>
                                            <li class="list-item">
                                                <p>Enable verbose logging in preferences for detailed operation tracking and submit debug information when reporting technical issues</p>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
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