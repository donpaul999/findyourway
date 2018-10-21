FROM alpine
COPY ./runtime.sh /
ENTRYPOINT ["/runtime.sh"]
