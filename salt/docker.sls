add_gpg_key:
  cmd.run:
    - name: 'curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /usr/share/keyrings/docker-archive-keyring.gpg'
    - runas: root

docker_add_repo:
  file.managed:
    - name: /etc/apt/sources.list.d/docker.list
    - source: salt://repos/docker.repo

docker_apt:
  pkg.latest:
    - refresh: True
    - pkgs:
      - docker-ce
      - docker-ce-cli
      - containerd.io
      - python3-pip
      - python3-docker
    - skip_suggestions: true

docker_pip:
  pip.installed:
    - name: docker

docker_service:
  service.running:
    - name: docker.service
    - enable: True

docker_run_container:
  cmd.run:
    - name: 'docker run saltme/lambda:v2'
    - runas: mike