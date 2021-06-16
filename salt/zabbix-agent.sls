install_zabbix_agent:
   pkg.installed:
      - name: zabbix-agent

/etc/zabbix/zabbix_agentd.conf:
   file:
      - managed
      - source: salt://files/zabbix_agentd.conf
      - require:
      - pkg: zabbix-agent
   run_agent:
   service.running:
      - name: zabbix-agent.service
      - enable: true
	  
restart_zabbix_agent:
  service.running:
    - enable: True
    - reload: True
    - watch:
      - pkg: zabbix-agent