<?php
/**
 * The html template file of step2 method of install module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2013 青岛易软天创网络科技有限公司 (QingDao Nature Easy Soft Network Technology Co,LTD www.cnezsoft.com)
 * @license     LGPL (http://www.gnu.org/licenses/lgpl.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     ZenTaoPMS
 * @version     $Id: step2.html.php 4972 2013-07-02 06:50:10Z zhujinyonging@gmail.com $
 */
?>
<?php include '../../common/view/header.lite.html.php';?>
<?php include '../../common/view/colorbox.html.php';?>
<form method='post' action='<?php echo $this->createLink('install', 'step3');?>'>
  <table align='center' class='table-6'>
    <caption><?php echo $lang->install->setConfig;?></caption>
    <tr>
      <th class='w-p20'><?php echo $lang->install->key;?></th>
      <th class='text-left'><?php echo $lang->install->value?></th>
    </tr>
    <tr>
      <th><?php echo $lang->install->defaultLang;?></th>
      <td><?php echo html::select('defaultLang', $config->langs, $app->getClientLang(), 'class=select-3');?></td>
    </tr>
    <tr>
      <th><?php echo $lang->install->dbHost;?></th>
      <td><?php echo html::input('dbHost', '127.0.0.1', 'class=text-3');?><?php echo $lang->install->dbHostNote;?></td>
    </tr>
    <tr>
      <th><?php echo $lang->install->dbPort;?></th>
      <td><?php echo html::input('dbPort', '3306', 'class=text-3');?></td>
    </tr>
    <tr>
      <th><?php echo $lang->install->dbUser;?></th>
      <td><?php echo html::input('dbUser', 'root', 'class=text-3');?></td>
    </tr>
    <tr>
      <th><?php echo $lang->install->dbPassword;?></th>
      <td><?php echo html::input('dbPassword', '', 'class=text-3');?></td>
    </tr>
    <tr>
      <th><?php echo $lang->install->dbName;?></th>
      <td><?php echo html::input('dbName', 'zentao', 'class=text-3');?></td>
    </tr>
    <tr>
      <th><?php echo $lang->install->dbPrefix;?></th>
      <td>
      <?php 
      echo html::input('dbPrefix', 'zt_', 'class=text-3');
      echo html::checkBox('clearDB', $lang->install->clearDB);
      ?>
      </td>
    </tr>
    <tr>
      <td colspan='2' class='text-center'><?php echo html::submitButton() . html::hidden('requestType', 'GET');?></td>
    </tr>
  </table>
</form>
<?php include '../../common/view/footer.lite.html.php';?>
