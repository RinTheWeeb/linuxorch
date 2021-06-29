install_zabbix_agent:
   pkg.installed:
      - name: zabbix-agent

/etc/zabbix/zabbix_agentd.conf:
   file:
      - managed
      - source: salt://files/zabbix_agentd.conf
      - require:
        - pkg: zabbix-agent

restart_zabbix:
   cmd.run:
      - name: 'systemctl restart zabbix-agent'
      - runas: root