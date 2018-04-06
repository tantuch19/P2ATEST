se: &base
    user: deployer
    deploy_path: /var/www/sites/platform
    forward_agent: true

.production : &production
    << : *base
    stage: production
.staging : &staging
    << : *base
    stage: staging
stage-1:
    << : *staging
    hostname: 
    roles:
        - platform
        - php7.1
        - frontend
        - migrates
heisenberg:
    << : *production
    hostname: 
    roles:
      - platform
      - php71
      - frontend
saul:
    << : *production
    hostname: 
    roles:
      - platform
      - php71
      - frontend

gustavo:
    << : *production
    hostname:
    roles:
      - platform
      - php71
      - frontend
mike:
    << : *production
    hostname: 
    roles:
      - migrates
      - platform
      - notifier

demo:
    << : *base
    hostname: 
    stage: demo
    roles:
        - migrates
        - platform
        - php71
        - frontend

