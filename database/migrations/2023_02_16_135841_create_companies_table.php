<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->text('stock_code');
            $table->text('industry');
            $table->text('name');
            $table->integer('rank');

            $table->integer('总得分');
            $table->double('百分制得分');

            $table->integer('愿景');
            $table->integer('经济');
            $table->integer('dd');
            $table->integer('碳');
            $table->integer('排放');

            $table->integer('环境政策、方针和理念');
            $table->integer('下一年度环保目标');
            $table->integer('环保设施的建设、投资和运行费用');
            $table->integer('排污费、绿化费等税收支出');
            $table->integer('环保拨款补贴');
            $table->integer('环保技术研发投资费用');
            $table->integer('环境罚款与重大环境事故');
            $table->integer('建设项目环境影响评价和“三同时”验收制度');
            $table->integer('环境保护荣誉');
            $table->integer('环境认证');
            $table->integer('对合作企业的环保要求');
            $table->integer('公共环境福利');
            $table->integer('环境风险来源及对策');
            $table->integer('碳减排目标');
            $table->integer('碳减排行动');
            $table->integer('碳排放量和减排量');
            $table->integer('三废处理情况');
            $table->integer('本年度资源直接和间接的消耗情况');
            $table->integer('本年度污染物（三废加噪音）直接和间接的排放情况');
            $table->integer('因环保举措所节省的资源量与减少的排污量');

            $table->text('备注：有/无');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
