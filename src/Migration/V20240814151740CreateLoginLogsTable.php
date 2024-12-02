<?php

namespace Miaoxing\App\Migration;

use Wei\Migration\BaseMigration;

class V20240814151740CreateLoginLogsTable extends BaseMigration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->schema->table('login_logs')
            ->bigId()
            ->uBigInt('app_id')->comment('应用编号')
            ->userId()
            ->string('username')->comment('用户名')
            ->uTinyInt('type')->comment('操作类型')
            ->mediumInt('code')->comment('返回代码')
            ->string('message')->comment('返回消息')
            ->uTinyInt('platform')->defaults(1)->comment('平台，默认为浏览器')
            ->string('user_agent')->comment('用户代理')
            ->timestamp('created_at')->comment('创建时间')
            ->bigInt('created_by')->comment('创建用户编号')
            ->varBinary('created_ip', 16)->comment('创建用户 IP')
            ->string('created_ip_address', 16)->comment('创建用户地址')
            ->index('created_at')
            ->exec();
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->schema->dropIfExists('login_logs');
    }
}
