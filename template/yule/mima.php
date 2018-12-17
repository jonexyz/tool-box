<?php
/**
 * Created by PhpStorm.
 * User: jone
 * Date: 18-12-15
 * Time: 下午12:50
 */
?>

<!doctype html>
<html lang="en">

    <?php define('TITLE','首页'); get_temp('header.php') ?>

    <style>
        #main {
            max-width: 400px;
            margin: 0 auto;
        }

        #main ul {
            margin: 0;
            padding: 0;
            border-top: 1px solid #eee;
            list-style: none;
            font-size: 14px;
        }

        #main li {
            clear: both;
            overflow: hidden;
            padding: .5em 0;
            border-bottom: 1px solid #eee;
        }

        .pure-form label {
            display: block;
            overflow: hidden;
            margin: 0;
        }

        .pure-form span {
            float: left;
            margin: 6px 0;
        }

        input {
            float: right;
            margin-top: 9px;
        }


        #generate {
            margin: 1em 0;
            background-color: dodgerblue;
        }

        .pure-input-1 {
            font-family: Monaco, Menlo, Consolas, Inconsolata, 'Deja Vu Sans Mono', 'Droid Sans Mono', 'Lucida Console', 'Courier New', Courier, monospace;
            padding:1em;
        }
    </style>

    <body class="page-body">
    <!-- skin-white -->
    <div class="page-container">

        <?php get_temp('nav.php') ?>

        <div class="main-content">
            <?php get_temp('nav_top.php') ?>

            <!-- 常用推荐 -->
            <div class="row">
                <div class="col-md-12">
                    <div >
                        <div style="text-align: center"><h3>在线密码生成器</h3></div>
                        <form id="main" class="pure-form">
                            <ul>
                                <li><label><input type="checkbox" name="include_number" checked/><span>数字</span></label>
                                </li>
                                <li><label><input type="checkbox" name="include_lowercaseletters"
                                                  checked/><span>小写字母</span></label>
                                </li>
                                <li><label><input type="checkbox" name="include_uppercaseletters"
                                                  checked/><span>大写字母</span></label>
                                </li>
                                <li><label><span>特殊符号</span><input type="text" name="special_characters"
                                                                   placeholder="输入需要添加的特殊符号"/></label></li>
                                <li><label><span>排除字符</span><input type="text" name="exclude_characters"
                                                                   placeholder="比如：i, l, 1, L, o, 0, O"/></label></li>
                                <li><label><input type="checkbox" name="password_unique"/><span>字符不重复</span></label>
                                </li>
                                <li><label><span>密码长度</span><input type="number" name="password_length" min="0"
                                                                   value="8"/></label>
                                </li>
                                <li><label><span>密码数量</span><input type="number" name="password_quantity" min="0"
                                                                   value="1"/></label></li>
                            </ul>
                            <button type="button" id="generate" class="btn btn-primary">
                                生成密码
                            </button>
                            <textarea name="output" class="pure-input-1" cols="45" rows="7" readonly></textarea>
                        </form>
                    </div>
                </div>

            </div>
            <br/>
            <!-- END 常用推荐 -->


            <?php  get_temp('footer.php') ?>

            <!-- Main Footer -->
            <!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
            <!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
            <!-- Or class "fixed" to  always fix the footer to the end of page -->

        </div>
    </div>
    <!-- 锚点平滑移动 -->
    <?php  get_temp('footer_js.php') ?>

    <script>
        var form = document.getElementById('main');

        function rand(max) {
            return Math.floor(Math.random() * max);
        }

        document.getElementById('generate').onclick = function () {
            var chars = '';
            var passwords = [];
            var passwordUnique = form.password_unique.checked;
            var quantity = Number(form.password_quantity.value);

            if (form.include_number.checked) chars += '0123456789';
            if (form.include_lowercaseletters.checked) chars += 'abcdefghijklmnopqrstuvwxyz';
            if (form.include_uppercaseletters.checked) chars += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            if (form.special_characters.value) chars += form.special_characters.value;
            if (form.exclude_characters.value) chars = chars.replace(new RegExp(form.exclude_characters.value.split('').join('|'), 'g'), '');

            while (passwords.length < quantity) {
                var _chars = chars.split('');
                var password = '';

                for (var i = 0, l = form.password_length.value; i < l; i++) {
                    if (_chars.length < 1) break;

                    var idx = rand(_chars.length);
                    password += _chars[idx];
                    if (passwordUnique) _chars.splice(idx, 1);
                }

                if (passwords.indexOf(password) === -1) passwords.push(password);
            }

            form.output.value = passwords.join('\n');
        };

        form.output.onfocus = function () {
            this.select();
        };

        function loadConfig() {
            var config = JSON.parse(localStorage.getItem('passwordConfig'));

            Object.keys(config).forEach(function(name) {
                var value = config[name];
                var input = form[name];

                if (input.type === 'checkbox') {
                    input.checked = value;
                } else {
                    input.value = value;
                }
            });
        }

        function saveConfig() {
            var config = {};

            [].forEach.call(form.getElementsByTagName('input'), function(input) {
                config[input.name] = input.type === 'checkbox' ? input.checked : input.value;
            });

            localStorage.setItem('passwordConfig', JSON.stringify(config));
        }

        [].forEach.call(form.getElementsByTagName('input'), function(input) {
            input.addEventListener('change', saveConfig);
        });

        if (localStorage.getItem('passwordConfig')) {
            loadConfig();
        }
    </script>

    </body>

</html>

