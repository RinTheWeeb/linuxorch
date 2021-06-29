rsyslog-apt:
  pkg.installed:
    - name: rsyslog

/etc/rsyslog.d/50-default.conf:
  file.replace:
    - pattern: "*.* @@10.0.0.9"
    - repl: "*.* @@10.0.0.9"
    - append_if_not_found: True

rsyslog:
  service.running:
    - enable: True
    - reload: True