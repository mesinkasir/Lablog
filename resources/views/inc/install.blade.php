<div class="col-12 col-md-12 p-3 p-md-5">
            <div class="border p-3 p-md-5 border-secondary">
                <h3 class="text-center p-3 border-left border-right border-dark">Installation</h3>
                <hr/>
                <p>Download this source code on github repo <a href="https://github.com/mesinkasir/Lablog" class="btn btn-dark text-white"><i class="fab fa-github"></i> Download</a></p>
                <p>Extract download folder on your project folder , then you need to download third party apps, so you can download and install it on your devices.</p>
                    <ul>
                        <li><a href="https://nodejs.org/en/download/">Node Download →</a><br/>After download node you can install then check a node version you have download it with open shell terminal or command prompt and run <code>node -v</code> then we need to check npm version too you can run <code>npm -v</code>, if shell terminal displaying your all version node and npm congratulations now you have successfully download and installing node on your devices.</li>
                        <li><a href="https://getcomposer.org/download/">Composer Download →</a><br/>Then we need to download composer so you can download composer and run instalaltion for run composer on our devices, after installation success , you can check composer version with open shell terminal or command prompt then run <code>composer -v</code> if bash terminal displaying composer version ,now you have success to installing composer.</li>
                        <li><a href="https://getcomposer.org/download/">Install Laravel →</a><br/>Now we need to installing laravel globaly so you can open shell terminal command prompt , and we use composer for installing laravel globaly on devices. just run <code>composer global require laravel/installer</code></li>
                        <li><a href="https://github.com/mesinkasir/Lablog">Install Lablog →</a><br/>Allright now we can install this laravel cms blog , so you can create new folder project, and you can use shell terminal for clone repo,or if you have download source code files now you can extract all files on your project folder, now we can install using shell terminal command prompt, then locate on your project folder, for example you have create folder on desktop so run this code on terminal <code>cd C:\Users\yourpcname\Desktop\lablog</code> you can change yourpcname with your pc name , <br/>Now we need to configure local database so open folder project and edit .env files, now you need to confirgure <code>DB_DATABASE='C:/Users/Pcname/Desktop/lablog/database/database.sqlite'</code> change pcname with your pc name and save it, then we need to installing this project so run this.
                        <ul><li> <code>npm install && composer install</code>  → for installing lablog laravel blog cms on your devices.</li>
                        <li><code>npm run dev</code> → for run development mode</li>
                        <li><code>php artisan key:generate</code> → for security key your laravel web app</li>
                        <li><code>php artisan serve</code> → for open your web app and visit localhost:8000 on web browser</li>
                    </ul>
                        </li>
                        <li>Congratulations now you have success installing lablog on your devices. so what next ?? let's get started work with lablog with read documentation</li>
                    </ul>
                    <div class="text-center p-1">
                        <p>Next Step you need to follow....</p>
                    <a href="{{ url('/documentation') }}" class="btn btn-danger text-white">Documentation →</a>
                    </div>
            </div>
        </div>